import React, { useEffect, useState } from 'react';
import axios from 'axios';
import URL from '../../componentes/Url/Url.jsx';
import { useHistory } from "react-router-dom";
import ReactLoading from 'react-loading';
import { CButton, CCard, CCardBody, CCol, CContainer, CImg, CRow } from '@coreui/react';
import { FaChevronLeft } from "react-icons/fa";
import Tabela from '../../componentes/Tabela/Tabela';

const TituloVisualizar = (props) => {
    const history = useHistory();
    const { id } = props.match.params;
    const [carregada, mudarCarregada] = useState(false);
    const [titulo, mudarTitulo] = useState({});
    const [colunas, mudarColunas] = useState([]);
    const [linhas, mudarLinhas] = useState([]);

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

            mudarTitulo(titulo);
            mudarLinhas(linhasAux);
            mudarColunas(colunasAux);
            mudarCarregada(true);
        }
        
        if (history.location.dados) {
            montarTabela(history.location.dados);
            mudarCarregada(true);
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
    }, [id, history.location.dados]);

    const cliqueNaLinha = (evento, dados) => {
        
    }

    return (
        <React.Fragment>
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
                                    <CRow>
                                        <CCol xs={4}>
                                            <CImg
                                                src={`${URL.public}imagens/capas/75.png`}
                                                alt="Foto de capa"
                                                height="100%"
                                                width="100%"
                                                fluid
                                            />
                                        </CCol>
                                        <CCol xs={8}>
                                            <CRow className="h-100">
                                                <CCol className="align-content-between">
                                                    <CRow>
                                                        <CCol xs={12}>
                                                            <div className="p-2">
                                                                {titulo.nome}
                                                            </div>
                                                        </CCol>
                                                    </CRow>
                                                    <CRow className="align-items-center">
                                                        <CCol xs={6}>
                                                            <div className="p-2">
                                                                {`EDITORA: ${titulo.editora_nome}`}
                                                            </div>
                                                        </CCol>
                                                        <CCol xs={6}>
                                                            <div className="p-2">
                                                                {`STATUS: ${titulo.status_nome}`}
                                                            </div>
                                                        </CCol>
                                                    </CRow>
                                                    <CRow className="align-items-center">
                                                        <CCol xs={6}>
                                                            <div className="p-2">
                                                                {`VOLUMES: ${titulo.volumes.length}`}
                                                            </div>
                                                        </CCol>
                                                        <CCol xs={6}>
                                                            <div className="p-2">
                                                                teste5
                                                            </div>
                                                        </CCol>
                                                    </CRow>
                                                </CCol>
                                            </CRow>
                                        </CCol>
                                    </CRow> 
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
