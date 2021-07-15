import React, { useEffect, useState } from 'react';
import axios from 'axios';
import URL from '../../componentes/Url/Url.jsx';
import { useHistory } from "react-router-dom";
import { useSelector } from 'react-redux';
import ReactLoading from 'react-loading';
import { CButton, CCard, CCardBody, CCol, CContainer, CRow } from '@coreui/react';
import { FaChevronLeft } from "react-icons/fa";
import Tabela from '../../componentes/Tabela/Tabela';
import Aviso from '../../componentes/Aviso/Aviso.jsx';

const TituloVisualizar = (props) => {
    const history = useHistory();
    const { id } = props.match.params;
    const usuario = useSelector(estado => estado.usuario)
    const [carregada, mudarCarregada] = useState(false);
    const [titulo, mudarTitulo] = useState({});
    const [colunas, mudarColunas] = useState([]);
    const [linhas, mudarLinhas] = useState([]);
    const [linhasSelecionadas, mudarLinhasSelecionadas] = useState([]);
    const [avisos, mudarAvisos] = useState([]);

    useEffect(() => {
        const montarTabela = (titulo) => {
            let linhasAux = [];
            titulo.volumes.forEach((volume) => {
                let data = volume.data_lancamento.split('-');
                linhasAux.push({
                    id: volume.id,
                    nome: volume.nome,
                    preco: `R$ ${volume.preco.toFixed(2)}`,
                    data: `${data[2]}/${data[1]}/${data[0]}`,
                    observacao: volume.observacao,
                    ordem: volume.ordem
                })
            })

            let colunasAux = [
                {title: 'Nome', field: 'nome'},
                {title: 'Preço', field: 'preco'},
                {title: 'Data', field: 'data'},
                {title: 'Observação', field: 'observacao'}
            ]

            if (usuario) {
                let config = {
                    headers: {
                        'Authorization': `Bearer ${usuario.token}`
                    }
                }
                let obj = {
                    usuario_id: usuario.id,
                    titulo_id: id
                }
                axios.post(`${URL.backend}meusvolumes/lista`, obj, config)
                .then(resposta => {
                    let linhasSelecionasAux = [];
                    if (resposta.data.data[0]) {
                        if (resposta.data.data[0].usuario_volume_quantidade === titulo.volumes.length) {
                            linhasAux.forEach((volume, index) => {
                                volume.tableData = {
                                    id: index,
                                    checked: true
                                }
                                linhasSelecionasAux.push(volume);
                            })
                        } else {
                            resposta.data.data[0].volumes_usuario.forEach((volumeColecao, indexColecao) => {
                                linhasAux.forEach((volume, index) => {
                                    if (volume.id === volumeColecao.volume_id) {
                                        volume.tableData = {
                                            id: index,
                                            checked: true
                                        }
                                        linhasSelecionasAux.push(volume);
                                    }
                                })
                            })
                        }
                    }
                    
                    mudarTitulo(titulo);
                    mudarColunas(colunasAux);
                    mudarLinhas(linhasAux);
                    mudarLinhasSelecionadas(linhasSelecionasAux);
                    mudarCarregada(true);
                })
                .catch(resposta => {
                    console.log(resposta);
                })
            } else {
                mudarTitulo(titulo);
                mudarLinhas(linhasAux);
                mudarColunas(colunasAux);
                mudarCarregada(true);
            }
        }
        
        if (history.location.dados) {
            montarTabela(history.location.dados);
        } else {
            let obj = {
                id
            }
            axios.post(`${URL.backend}titulo/visualizar`, obj)
            .then(resposta => {
                if (resposta.data.sucesso) {
                    montarTabela(resposta.data.data[0]);
                }
            })
            .catch(erro => {
                console.log(erro);
            })
        }
    }, [id, history.location.dados, usuario]);

    const cliqueNaLinha = (evento, dados) => {
        
    }

    const salvar = () => {
        let config = {
            headers: {
                'Authorization': `Bearer ${usuario.token}`
            }
        }
        let obj = {
            usuario_id: usuario.id,
            titulo_id: id,
            volumes: linhasSelecionadas
        }
        axios.post(`${URL.backend}meusvolumes/inserir`, obj, config)
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
                    mensagem: 'Os volumes foram inseridos com sucesso.'
                })
                mudarAvisos(avisosAux);
            }
        })
        .catch(resposta => {
            console.log(resposta);
        })
    }



    return (
        <React.Fragment>
            <Aviso 
                avisos={avisos}
            />
            {carregada?
                <React.Fragment>
                    {history.location.dados
                    ?
                        <CButton onClick={() => history.goBack()}>
                            <FaChevronLeft
                                size='30px'
                                title='Voltar'
                            />
                        </CButton>
                    :
                        null
                    }
                    {titulo.observacao?
                        <div>{`Observação: ${titulo.observacao}`}</div>
                    :
                        null
                    }
                    <CRow>
                        <CCol>
                            <CCard className="p-2">
                                <CCardBody>
                                    <div className="bd-example d-md-flex">
                                        <div className="p-3 ml-md-9" style={{marginTop: 'auto', marginBottom: 'auto', marginLeft: 0}}>
                                            <div style={{textAlign: 'center'}}>
                                            <img
                                                className="w-100 h-100"
                                                style={{ cursor: 'pointer', maxHeight: 304, maxWidth: 200}}
                                                src={`${URL.public}imagens/capas/75.png`}
                                                alt="Foto de capa"
                                            />
                                            </div>
                                        </div>
                                        <div className="p-3 ml-md-9" style={{marginTop: 'auto', marginBottom: 'auto', marginLeft: 0}}>
                                            <div>
                                                <div className="p-3 mb-2 mr-md-3 bg-light" style={{maxWidth: '260px', maxHeight: '100px', margin: 'auto'}}>
                                                    {`NOME: ${titulo.nome}`}
                                                </div>
                                                <div className="p-3 mb-2 mr-md-3 bg-light" style={{maxWidth: '260px', maxHeight: '100px', margin: 'auto'}}>
                                                    {`VOLUMES: ${titulo.volumes.length}`}
                                                </div>
                                                <div className="p-3 mb-2 mr-md-3 bg-light" style={{maxWidth: '260px', maxHeight: '100px', margin: 'auto'}}>
                                                    {`EDITORA: ${titulo.editora_nome}`}
                                                </div>
                                                <div className="p-3 mb-2 mr-md-3 bg-light" style={{maxWidth: '260px', maxHeight: '100px', margin: 'auto'}}>
                                                    {`STATUS: ${titulo.status_nome}`}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </CCardBody>
                            </CCard>
                        </CCol>
                    </CRow>
                    <Tabela
                        colunas={colunas}
                        linhas={linhas}
                        titulo="Lista de volumes"
                        cliqueNaLinha={cliqueNaLinha}
                        selecao={true}
                        paginacao={true}
                        botaoSalvar={true}
                        botaoSalvarAcao={salvar}
                        mudarLinhasSelecionadas={linhas => mudarLinhasSelecionadas(linhas)}
                    />
                </React.Fragment>
            :
                <div className="c-default-layout flex-row align-items-center">
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

export default TituloVisualizar
