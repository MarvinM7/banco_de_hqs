import React, { useEffect, useState } from 'react';
import axios from 'axios';
import URL from '../Url/Url';
import { Link } from 'react-router-dom';
import ReactLoading from 'react-loading';
import { useHistory } from 'react-router';
import { useSelector } from 'react-redux';
import { CButton, CCard, CCardBody, CCardFooter, CCardHeader, CCol, CCollapse, CContainer, CRow } from '@coreui/react';
import { FaAmazon, FaCheck, FaChevronLeft, FaChevronRight } from "react-icons/fa";

const Volume = (props) => {
    return (
        <CRow style={{cursor: 'pointer'}}>
            <CCol xs={'1'} className="align-self-center" onClick={() => props.clique(props.obj.volume_id, props.obj.titulo_id)}>
                <div className="text-left">
                    {props.obj.usuarioPossui
                    ?
                        <FaCheck
                            style={{color: 'green'}}
                        />
                    :
                        null
                    }
                    
                </div>
            </CCol>
            <CCol className="text-left align-self-center" onClick={() => props.clique(props.obj.volume_id, props.obj.titulo_id)}>
                {props.obj.nome}
            </CCol>
            <CCol xs={'2'} className="align-self-center justify-content-start" onClick={() => console.log('teste')}>
                <div className="text-center">
                    {props.obj.link_amazon
                    ?
                        <CButton color="primary"><Link to={`//${props.obj.link_amazon}`} target={'_blank'}><FaAmazon color="white" /></Link></CButton>
                        
                    :
                        null
                    }
                    
                </div>
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
    const usuario = useSelector(estado => estado.usuario);

    useEffect(() => {
        let usuario_id = null;
        if (usuario) {
            usuario_id = usuario.id;
        }
        let obj = {
            ano_mes_lancamento: `${ano}-${mes < 10? '0' + (mes + 1)  : mes}`,
            editora_id,
            usuario_id
        }
        axios.post(`${URL.backend}volumes/lista`, obj)
        .then(resposta => {
            if (resposta.data.sucesso) {
                let listaAux = [];
                resposta.data.data.forEach(volume => {
                    listaAux.push({
                        nome: `${volume.titulo_nome} - ${volume.nome}`,
                        volume_id: volume.id,
                        titulo_id: volume.titulo_id,
                        link_amazon: volume.link_amazon || null,
                        usuarioPossui: volume.usuarioPossui !== null ? volume.usuarioPossui : false
                    })
                })
                mudarLista(listaAux);
                mudarCarregada(true);
            }
        })
        .catch(resposta => {
            console.log(resposta);
        })
    }, [editora_id, mes, ano, usuario])

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
                                                                obj={obj}
                                                            />
                                                            {index !== 3 && index !== lista.length - 1
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
                                        <CCol className="text-center">
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
                                                                {index === 4
                                                                ?
                                                                    <hr/>
                                                                :
                                                                    null
                                                                }
                                                                <Volume
                                                                    nome={obj.nome}
                                                                    clique={clique}
                                                                    obj={obj}
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
                                    {lista.length > 4
                                    ?
                                        mostrarMais
                                        ?
                                            'Mostrar menos'
                                        :
                                            'Mostrar mais'
                                    :
                                        ''
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