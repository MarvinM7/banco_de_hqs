import React, { useEffect, useState } from 'react';
import axios from 'axios';
import URL from '../Url/Url';
import ReactLoading from 'react-loading';
import { useHistory } from 'react-router';
import { CCard, CCardBody, CCardFooter, CCardHeader, CCol, CCollapse, CContainer, CRow } from '@coreui/react';
import { FaChevronLeft, FaChevronRight } from "react-icons/fa";

const Volume = (props) => {
    return (
        <CRow style={{cursor: 'pointer'}} onClick={() => props.clique(props.volume_id, props.titulo_id)}>
            <CCol>
                {props.nome}
            </CCol>
        </CRow>
    )
}

const Checklist = (props) => {
    const [carregada, mudarCarregada] = useState(false);
    const { editora_nome, editora_id } = props.editora;
    const data = new Date();
    const [mes, mudarMes] = useState(data.getMonth());
    const [ano, mudarAno] = useState(data.getUTCFullYear());
    const mesArray = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
    const [mostrarMais, mudarMostrarMais] = useState(false);
    const [lista, mudarLista] = useState([]);
    const history = useHistory();

    useEffect(() => {
        let obj = {
            ano_mes_lancamento: `${ano}-${mes < 10? '0' + (mes + 1)  : mes}`,
            editora_id
        }
        axios.post(`${URL.backend}volumes/lista`, obj)
        .then(resposta => {
            if (resposta.data.sucesso) {
                let listaAux = [];
                resposta.data.data.forEach(volume => {
                    listaAux.push({
                        nome: `${volume.titulo_nome} - ${volume.nome}`,
                        volume_id: volume.id,
                        titulo_id: volume.titulo_id
                    })
                })
                mudarLista(listaAux);
                mudarCarregada(true);
            }
        })
        .catch(resposta => {
            console.log(resposta);
        })
    }, [editora_id, mes, ano])

    const reduzirMes = () => {
        mudarCarregada(false);
        mudarMostrarMais(false);
        if (mes > 0) {
            mudarMes(mes - 1);
        } else {
            mudarMes(11);
            mudarAno(ano - 1);
        }
    }

    const incrementarMes = () => {
        mudarCarregada(false);
        mudarMostrarMais(false);
        if (mes < 11) {
            mudarMes(mes + 1);
        }
    }

    const caixa = (e) => {
        mudarMostrarMais(!mostrarMais);
        e.preventDefault();
    }

    const clique = (volume_id, titulo_id) => {
        history.push({
            pathname: `/titulo/${titulo_id}`,
            state: { volume_id }
        })
    }

    return (
        <React.Fragment>
                <CCard>
                    <CCardHeader>
                        <CRow className="align-items-center">
                            <CCol className="text-left" onClick={reduzirMes} style={{cursor: 'pointer'}} >
                                <div>
                                    <FaChevronLeft />
                                </div>
                            </CCol>
                            <CCol xs={'8'} className="text-center">
                                <CRow>
                                    <CCol xs={'12'} className="text-center">
                                        {`Checklist ${editora_nome}`}
                                    </CCol>
                                </CRow>
                                <CRow>
                                    <CCol xs={'12'} className="text-center">
                                        {`${mesArray[mes]} ${ano}`}
                                    </CCol>
                                </CRow>
                            </CCol>
                            <CCol className="text-right" onClick={incrementarMes} style={{cursor: 'pointer'}} >
                                <div>
                                    <FaChevronRight />
                                </div>
                            </CCol>
                        </CRow>
                    </CCardHeader>
                    <CCardBody>
                        {carregada
                        ?
                            <React.Fragment>
                            {lista.length > 0
                                ?
                                    <React.Fragment>
                                        {lista.map((obj, index) => {
                                            return (
                                                <React.Fragment key={index}>
                                                    {index <= 3
                                                    ?
                                                        <React.Fragment>
                                                            <Volume
                                                                nome={obj.nome}
                                                                clique={clique}
                                                                titulo_id={obj.titulo_id}
                                                                volume_id={obj.volume_id}
                                                            />
                                                            {index !== lista.length - 1
                                                            ?
                                                                <hr/>
                                                            :
                                                                null
                                                            }
                                                        </React.Fragment>
                                                    :
                                                        null
                                                    }
                                                </React.Fragment>
                                            )
                                        })}
                                    </React.Fragment>
                                :
                                    <CRow>
                                        <CCol>
                                            Sem registros cadastrados para o mês selecionado.
                                        </CCol>
                                    </CRow>
                                }
                                
                                {lista.length > 4
                                ?
                                    <React.Fragment>
                                        <CCollapse show={mostrarMais}>
                                            {lista.map((obj, index) => {
                                                return (
                                                    <React.Fragment key={index}>
                                                        {index > 3
                                                        ?
                                                            <React.Fragment>
                                                                <Volume
                                                                    nome={obj.nome}
                                                                    clique={clique}
                                                                />
                                                                {index !== lista.length - 1
                                                                ?
                                                                    <hr/>
                                                                :
                                                                    null
                                                                }
                                                            </React.Fragment>
                                                        :
                                                            null
                                                        }
                                                    </React.Fragment>
                                                )
                                            })}
                                        </CCollapse>
                                    </React.Fragment>
                                :
                                    null
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
                    </CCardBody>
                    <CCardFooter>
                        <CRow>
                            <CCol className="text-center">
                                <div style={{cursor: 'pointer'}} onClick={caixa}>
                                    {!mostrarMais?
                                        'Mostrar mais'
                                    :
                                        'Mostrar menos'
                                    }
                                </div>
                            </CCol>
                        </CRow>
                    </CCardFooter>
                </CCard>
        </React.Fragment>
    )
}

export default Checklist;