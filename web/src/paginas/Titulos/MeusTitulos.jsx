import React, { useEffect, useState } from 'react';
import axios from 'axios';
import { Link, useHistory, useLocation } from "react-router-dom";
import URL from '../../componentes/Url/Url.jsx';
import ReactLoading from 'react-loading';
import { useSelector } from 'react-redux';
import { CCard, CCardBody, CCardGroup, CCol, CContainer, CRow } from '@coreui/react';
import Tabela from '../../componentes/Tabela/Tabela';

const MeusTitulos = (props) => {
    const history = useHistory();
    const location = useLocation();
    const url = location.pathname;
    const usuario = useSelector(estado => estado.usuario);
    const [carregada, mudarCarregada] = useState(false);
    const [colunas, mudarColunas] = useState([]);
    const [linhas, mudarLinhas] = useState([]);

    useEffect(() => {
        if (usuario) {
            let obj = {
                usuario_id: usuario.id
            }
            let config = {
                headers: {
                    'Authorization': `Bearer ${usuario.token}`
                }
            }
            axios.all([
                axios.post(`${URL.backend}meusvolumes/lista`, obj, config),
                axios.post(`${URL.backend}editoras/lista`),
            ])
            .then(axios.spread((...respostas) => {
                let linhasAux = [];
                if (respostas[0].data.sucesso) {
                    respostas[0].data.data.forEach((titulo) => {
                        linhasAux.push({
                            titulo_id: titulo.titulo_id,
                            titulo_nome: titulo.titulo_nome,
                            editora_nome: titulo.editora_nome,
                            quantidade: `${titulo.usuario_volume_quantidade}/${titulo.volumes.length}`
                        })
                    })
                }

                let editorasString = '';
                if (respostas[1].data.sucesso) {
                    editorasString = '{';
                    respostas[1].data.data.forEach((editora, index) => {
                        editorasString += `"${editora.nome}" : "${editora.nome}"`;
                        if (index !== respostas[1].data.data.length - 1) {
                            editorasString += ', ';
                        }
                    })
                    editorasString += '}';
                }

                let colunasAux = [
                    {title: 'T??tulo', field: 'titulo_nome'},
                    {title: 'Editora', field: 'editora_nome', lookup: JSON.parse(editorasString)},
                    {title: 'Quantidade', field: 'quantidade'},
                ]

                mudarLinhas(linhasAux);
                mudarColunas(colunasAux);
                mudarCarregada(true);
            }))
            .catch(resposta => {
                console.log(resposta)
            })
        } else {
            mudarCarregada(true);
        }
        
    }, [usuario]);

    const cliqueNaLinha = (evento, dados) => {
        history.push(`/titulo/${dados.titulo_id}`);
    }

    return (
        <React.Fragment>
            {carregada?
                <React.Fragment>
                    {usuario?
                        <React.Fragment>
                            <Tabela
                                colunas={colunas}
                                linhas={linhas}
                                titulo="Lista de t??tulos da cole????o"
                                cliqueNaLinha={cliqueNaLinha}
                                selecao={false}
                                paginacao={true}
                            />
                        </React.Fragment>
                    :
                        <div className="c-default-layout flex-row align-items-center">
                            <CContainer>
                                <CRow className="justify-content-center">
                                    <CCol md="6">
                                        <CCardGroup>
                                            <CCard className="p-4">
                                                <CCardBody style={{textAlign: 'center'}}>
                                                    <CRow className="justify-content-center">
                                                        Para visualizar seus t??tulos, voc?? precisa estar logado na plataforma. <Link to={{ pathname: "/login", state: { url } }}>&nbsp;Clique aqui&nbsp;</Link> para ir para a p??gina de login.
                                                    </CRow>
                                                </CCardBody>
                                            </CCard>
                                        </CCardGroup>
                                    </CCol>
                                </CRow>
                            </CContainer>
                        </div>
                    }
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

export default MeusTitulos
