import React, { useEffect, useState } from 'react';
import axios from 'axios';
import URL from '../../componentes/Url/Url';
import { useHistory } from 'react-router-dom';
import { useDispatch, useSelector } from 'react-redux';
import { CButton, CCard, CCardBody, CCol, CContainer, CForm, CInput, CInputGroup, CInputGroupPrepend, CInputGroupText, CRow } from '@coreui/react';
import { FaEnvelope, FaLock } from "react-icons/fa";
import ReactLoading from 'react-loading';

const TrocarSenha = (props) => {
    const { email, token } = props.match.params;
    const usuario = useSelector(estado => estado.usuario)
    const history = useHistory();
    const dispatch = useDispatch();
    const [carregada, mudarCarregada] = useState(false);
    const [password, mudarPassword] = useState('');

    useEffect(() => {
        if (usuario) {
            history.push('/');
        }
        mudarCarregada(true);
    }, [usuario]);

    const recuperarSenha = (e) => {
        mudarCarregada(false);
        e.preventDefault();
        let obj = {
            email: decodeURIComponent(email),
            token,
            password
        }
        axios.post(`${URL.backend}trocarsenha`, obj)
        .then(resposta => {
            if (resposta.data.sucesso) {
                let obj = {
                    id: resposta.data.data.usuario.original.id,
                    nome: resposta.data.data.usuario.original.name,
                    email: resposta.data.data.usuario.original.email,
                    imagem: resposta.data.data.usuario.original.foto,
                    googleId: resposta.data.data.usuario.original.googleId,
                    token: resposta.data.data.access_token
                }
                dispatch({ type: 'LOGAR', obj });
            } else {
                mudarCarregada(true);
            }
        })
        .catch(resposta => {
            console.log(resposta);
            mudarCarregada(true);
        })
        
    }

    return (
        <React.Fragment>
            {carregada
            ?
                <div className="c-app c-default-layout flex-row align-items-center">
                    <CContainer>
                        <CRow className="justify-content-center">
                            <CCol xs="12" sm="9" md="7" lg="5" xl="5">
                                <CCard className="p-4">
                                    <CCardBody>
                                        <CForm onSubmit={recuperarSenha}>
                                            <CInputGroup className="mb-3">
                                                <CInputGroupPrepend>
                                                    <CInputGroupText>
                                                        <FaEnvelope />
                                                    </CInputGroupText>
                                                </CInputGroupPrepend>
                                                <CInput type="text" value={decodeURIComponent(email)} autoComplete="username" disabled />
                                            </CInputGroup>
                                            <CInputGroup className="mb-3">
                                                <CInputGroupPrepend>
                                                    <CInputGroupText>
                                                        <FaLock />
                                                    </CInputGroupText>
                                                </CInputGroupPrepend>
                                                <CInput type="password" value={password} placeholder="Digite a nova senha" autoComplete="current-password" onChange={e => mudarPassword(e.target.value)} />
                                            </CInputGroup>
                                            <CButton type="submit" color="primary" block>Trocar senha</CButton>
                                        </CForm>
                                    </CCardBody>
                                </CCard>
                            </CCol>
                        </CRow>
                    </CContainer>
                </div>
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

export default TrocarSenha;
