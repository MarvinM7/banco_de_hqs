import React/* , { useEffect } */ from 'react';
//import axios from 'axios';
import { Link } from 'react-router-dom';
//import { useDispatch, useSelector } from 'react-redux';
//import URL from '../../componentes/Url/Url';

import { CCard, CCardBody, CCol, CRow } from '@coreui/react';
import CIcon from "@coreui/icons-react";
import Checklist from '../../componentes/Checklist/Checklist';

const Home = () => {
    /* const usuario = useSelector(estado => estado.usuario);
    const dispatch = useDispatch();

    useEffect(() => {
        if (usuario) {
            let config = {
                headers: {
                    'Authorization': `Bearer ${usuario.token}`
                }
            }
            axios.post(`${URL.backend}token/renovar`, {}, config)
            .then(resposta => {
                console.log(resposta.data);
                if (resposta.data.sucesso) {
                    console.log(resposta.data.data);
                    let obj = {
                        token: resposta.data.token
                    }
                    dispatch({ type: 'RENOVAR_TOKEN', obj });
                } else {
                    let deslogar = false;
                    switch(resposta.data.status) {
                        case 'Token expirado':
                            deslogar = true;
                            break;
                        case 'Token inválido':
                            deslogar = true;
                            break;
                        case 'Token não encontrado':
                            deslogar = true;
                            break;
                        default:
                            break;
                    }
                    if (deslogar) {
                        dispatch({type: 'DESLOGAR'});
                    }
                }
            })
            .catch(resposta => {
                console.log(resposta);
            })
        }
    }, []); */

    return (
        <div className="c-default-layout flex-row align-items-center">
            <CRow className="justify-content-center">
                <CCol md="8">
                        <CCard className="p-4">
                            <CCardBody style={{textAlign: 'center'}}>
                                <CRow className="justify-content-center">
                                    <CIcon name="cilSettings" size="9xl" />
                                </CRow>
                                <CRow className="justify-content-center">
                                    Portal em desenvolvimento. Enquanto isso, nos ajude comprando através do nosso link na Amazon. Basta <Link target={"_blank"} to={"//www.amazon.com.br?&_encoding=UTF8&tag=bancodehqs-20&linkCode=ur2&linkId=5fd0c430348c5c83c8900420429a4527&camp=1789&creative=9325"}>&nbsp;clicar aqui&nbsp;</Link> (link patrocinado) e realizar sua compra.
                                </CRow>
                            </CCardBody>
                        </CCard>
                </CCol>
                <CCol>
                    <Checklist
                        editora={{editora_nome: 'JBC', editora_id: 2}}
                    />
                    <Checklist
                        editora={{editora_nome: 'Panini', editora_id: 3}}
                    />
                    <Checklist
                        editora={{editora_nome: 'Panini', editora_id: 3}}
                    />
                </CCol>
            </CRow>
        </div>
    )
}

export default Home
