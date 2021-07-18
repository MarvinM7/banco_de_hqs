import React, { useEffect, useState } from 'react';
import { useSelector } from 'react-redux';
import { useHistory } from 'react-router-dom';
import URL from '../../componentes/Url/Url';
import { CButton, CCard, CCardBody, CCardFooter, CCol, CContainer, CForm, CFormGroup, CInput, CInputGroup, CInputGroupPrepend, CInputGroupText, CInvalidFeedback, CLabel, CRow, CSelect } from '@coreui/react';
import { FaEnvelope, FaFont } from "react-icons/fa";
import ReactLoading from 'react-loading';
import Aviso from '../../componentes/Aviso/Aviso';

import axios from 'axios';

const TituloFormulario = (props) => {
    const id = props.match.params.id;
    const usuario = useSelector(estado => estado.usuario);
    const history = useHistory();
    const [carregada, mudarCarregada] = useState(false);

    const [nome, mudarNome] = useState('');
    const [nomeErro, mudarNomeErro] = useState(false);
    const [nomeErroMensagem, mudarNomeErroMensagem] = useState('');

    const [editora, mudarEditora] = useState('');
    const [editoraErro, mudarEditoraErro] = useState(false);
    const [editoraErroMensagem, mudarEditoraErroMensagem] = useState('');

    const [status, mudarStatus] = useState('');
    const [statusErro, mudarStatusErro] = useState(false);
    const [statusErroMensagem, mudarStatusErroMensagem] = useState('');

    const [observacao, mudarObservacao] = useState('');
    const [observacaoErro, mudarObservacaoErro] = useState(false);
    const [observacaoErroMensagem, mudarObservacaoErroMensagem] = useState('');

    const [editorasLista, mudarEditorasLista] = useState([]);
    const [statusLista, mudarStatusLista] = useState([]);

    const [avisos, mudarAvisos] = useState([]);

    useEffect(() => {
        if (!usuario) {
            history.push('/');
        } else if (usuario.id !== 1) {
            history.push('/');
        }
    }, [history, usuario]);

    useEffect(() => {
        axios.all([
            axios.post(`${URL.backend}editoras/lista`),
            axios.post(`${URL.backend}titulos_status/lista`),
        ])
        .then(axios.spread((...respostas) => {
            if (respostas[0].data.sucesso) {
                mudarEditorasLista(respostas[0].data.data);
            }

            if (respostas[1].data.sucesso) {
                mudarStatusLista(respostas[1].data.data);
            }
        }))
        .catch(resposta => {
            console.log(resposta);
        })
    }, []);

    useEffect(() => {
        if (id) {
            let obj = {
                id
            }
            axios.post(`${URL.backend}titulo/visualizar`, obj)
            .then(resposta => {
                if (resposta.data.sucesso) {
                    if (resposta.data.data.length === 1) {
                        mudarNome(resposta.data.data[0].nome);
                        mudarEditora(resposta.data.data[0].editora_id);
                        mudarStatus(resposta.data.data[0].status_id);
                        mudarObservacao(resposta.data.data[0].observacao? resposta.data.data[0].observacao : '');
                        mudarCarregada(true);
                    } else {
                        history.push('/titulo/cadastrar');
                    }
                } else {
                    history.push('/titulo/cadastrar');
                }
            })
            .catch(resposta => {
                console.log(resposta);
                history.push('/titulo/cadastrar');
            })
        } else {
            mudarCarregada(true);
        }
    }, [history, id])

    const mudarNomeFuncao = (evento) => {
        mudarNome(evento.target.value);
        mudarNomeErro(false);
        mudarNomeErroMensagem('');
    }

    const mudarEditoraFuncao = (evento) => {
        mudarEditora(evento.target.value);
        mudarEditoraErro(false);
        mudarEditoraErroMensagem('');
    }

    const mudarStatusFuncao = (evento) => {
        mudarStatus(evento.target.value);
        mudarStatusErro(false);
        mudarStatusErroMensagem('');
    }

    const mudarObservacaoFuncao = (evento) => {
        mudarObservacao(evento.target.value);
        mudarObservacaoErro(false);
        mudarObservacaoErroMensagem('');
    }

    const cadastrar = () => {
        mudarCarregada(false);
        let checador = true;
        if (nome === '') {
            checador = false;
            mudarNomeErro(true);
            mudarNomeErroMensagem('O campo não pode ficar vazio');
        }

        if (editora === '') {
            checador = false;
            mudarEditoraErro(true);
            mudarEditoraErroMensagem('O campo não pode ficar vazio');
        }

        if (status === '') {
            checador = false;
            mudarStatusErro(true);
            mudarStatusErroMensagem('O campo não pode ficar vazio');
        }

        if (checador) {
            mudarCarregada(false);
            let obj = {
                id,
                nome,
                editora,
                status,
                observacao
            }
            let config = {
                headers: {
                    'Authorization': `Bearer ${usuario.token}`
                }
            }
            let rota = 'titulo/inserir';
            if (id) {
                rota = 'titulo/editar';
            }
            axios.post(`${URL.backend}${rota}`, obj, config)
            .then(resposta => {
                if (resposta.data.sucesso) {
                    let avisosAux = [];
                    avisos.forEach(aviso => {
                        avisosAux.push(aviso);
                    })
                    avisosAux.push({
                        posicao: 'top-right',
                        esconderAutomatico: 5000,
                        botaoFechar: true,
                        efeito: true,
                        titulo: 'sucesso',
                        mensagem: 'Registro salvo com sucesso.'
                    })
                    mudarAvisos(avisosAux);
                    
                    if (!id) {
                        history.push(`/titulo/editar/${resposta.data.data}`);
                    }
                }

                mudarCarregada(true);
            })
            .catch(resposta => {
                console.log(resposta);
                mudarCarregada(true);
            })
        } else {
            mudarCarregada(true);
        }
    }

    return (
        <React.Fragment>
            <Aviso avisos={avisos} />
            {carregada
            ?
                <CContainer>
                    <CRow className="justify-content-center">
                        <CCol xs="12">
                            <CCard className="p-4">
                                <CCardBody>
                                    <CForm>
                                        <CFormGroup>
                                            <CRow>
                                                <CCol md="12">
                                                    <CLabel htmlFor="nome">Nome</CLabel>
                                                    <CInputGroup>
                                                        <CInputGroupPrepend>
                                                            <CInputGroupText>
                                                                <FaFont />
                                                            </CInputGroupText>
                                                        </CInputGroupPrepend>
                                                        <CInput type="text" id="nome" name="nome" value={nome} onChange={mudarNomeFuncao} placeholder="Digite o nome" autoComplete={'on'} invalid={nomeErro} />
                                                        <CInvalidFeedback>{nomeErroMensagem}</CInvalidFeedback>
                                                    </CInputGroup>
                                                </CCol>
                                            </CRow>
                                        </CFormGroup>
                                        <CFormGroup>
                                            <CRow>
                                                <CCol md="12">
                                                    <CLabel htmlFor="editora">Editora</CLabel>
                                                    <CInputGroup>
                                                        <CInputGroupPrepend>
                                                            <CInputGroupText>
                                                                <FaEnvelope />
                                                            </CInputGroupText>
                                                        </CInputGroupPrepend>
                                                        <CSelect id="editora" name="editora" value={editora} onChange={mudarEditoraFuncao} invalid={editoraErro} >
                                                            <option value="">Selecione a editora</option>
                                                            {editorasLista.map(editora => {
                                                                return (
                                                                    <option key={editora.id} value={editora.id}>{editora.nome}</option>
                                                                )
                                                            })}
                                                        </CSelect>
                                                        <CInvalidFeedback>{editoraErroMensagem}</CInvalidFeedback>
                                                    </CInputGroup>    
                                                </CCol>
                                            </CRow>    
                                        </CFormGroup>
                                        <CFormGroup>
                                            <CRow>
                                                <CCol md="12">
                                                    <CLabel htmlFor="status">Status</CLabel>
                                                    <CInputGroup>
                                                        <CInputGroupPrepend>
                                                            <CInputGroupText>
                                                                <FaEnvelope />
                                                            </CInputGroupText>
                                                        </CInputGroupPrepend>
                                                        <CSelect id="status" name="status" value={status} onChange={mudarStatusFuncao} invalid={statusErro} >
                                                            <option value="">Selecione o status</option>
                                                            {statusLista.map(status => {
                                                                return (
                                                                    <option key={status.id} value={status.id}>{status.nome}</option>
                                                                )
                                                            })}
                                                        </CSelect>
                                                        <CInvalidFeedback>{statusErroMensagem}</CInvalidFeedback>
                                                    </CInputGroup>    
                                                </CCol>
                                            </CRow>    
                                        </CFormGroup>
                                        <CFormGroup>
                                            <CRow>
                                                <CCol md="12">
                                                    <CLabel htmlFor="observacao">Observação</CLabel>
                                                    <CInputGroup>
                                                        <CInputGroupPrepend>
                                                            <CInputGroupText>
                                                                <FaFont />
                                                            </CInputGroupText>
                                                        </CInputGroupPrepend>
                                                        <CInput type="text" id="observacao" name="observacao" value={observacao} onChange={mudarObservacaoFuncao} placeholder="Digite a observação" autoComplete={'on'} invalid={observacaoErro} />
                                                        <CInvalidFeedback>{observacaoErroMensagem}</CInvalidFeedback>
                                                    </CInputGroup>
                                                </CCol>
                                            </CRow>
                                        </CFormGroup>
                                    </CForm>
                                </CCardBody>
                                <CCardFooter>
                                    <CRow>
                                        <CCol md="12">
                                            <CButton color="primary" block onClick={cadastrar}>Salvar</CButton>
                                        </CCol>
                                    </CRow>
                                </CCardFooter>
                            </CCard>
                        </CCol>
                    </CRow>
                </CContainer>
            :
                <div className="c-app c-default-layout flex-row align-items-center">
                    <CContainer>
                        <CRow className="justify-content-center">
                            <CCol lg="12" className="align-items-center">
                                <div style={{display: 'table', margin: 'auto'}}>
                                    <ReactLoading type={'spokes'} color={'#000'} />
                                </div>
                            </CCol>
                        </CRow>
                    </CContainer>
                </div>
            }
        </React.Fragment>
    )
}

export default TituloFormulario;
