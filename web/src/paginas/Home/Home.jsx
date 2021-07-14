import React, { useEffect } from 'react';
import axios from 'axios';
import { Link } from 'react-router-dom';
import { useDispatch, useSelector } from 'react-redux';
import URL from '../../componentes/Url/Url';

import { CCard, CCardBody, CCardGroup, CCol, CContainer, CRow } from '@coreui/react';
import CIcon from "@coreui/icons-react";

const Home = () => {
    const usuario = useSelector(estado => estado.usuario);
    const dispatch = useDispatch();

    useEffect(() => {
        if (usuario) {
            let config = {
                headers: {
                    'Authorization': `Bearer ${usuario.token}`
                }
            }
            axios.get(`${URL.backend}testelogado`, config)
            .then(resposta => {
                if (resposta.data.sucesso) {

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
    }, [usuario, dispatch]);

    return (
        <div className="c-default-layout flex-row align-items-center">
            <CContainer>
                <CRow className="justify-content-center">
                    <CCol md="6">
                        <CCardGroup>
                            <CCard className="p-4">
                                <CCardBody style={{textAlign: 'center'}}>
                                    <CRow className="justify-content-center">
                                        <CIcon name="cilSettings" size="9xl" />
                                    </CRow>
                                    <CRow className="justify-content-center">
                                        Portal em desenvolvimento
                                    </CRow>
                                    <CRow className="justify-content-center">
                                        Enquanto isso, <Link target={"_blank"} to={"//www.amazon.com.br?&_encoding=UTF8&tag=bancodehqs-20&linkCode=ur2&linkId=5fd0c430348c5c83c8900420429a4527&camp=1789&creative=9325"}>&nbsp;clique aqui&nbsp;</Link> para acessar a Amazon.
                                    </CRow>
                                </CCardBody>
                            </CCard>
                        </CCardGroup>
                    </CCol>
                </CRow>
            </CContainer>
        </div>
    )
}

export default Home
