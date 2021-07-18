import React, { useEffect, useState } from 'react';
import { Link, Redirect, useHistory } from 'react-router-dom';
import axios from 'axios';
import URL from '../../componentes/Url/Url.jsx';
import { GoogleLogin } from 'react-google-login';
import { useDispatch, useSelector } from 'react-redux';
import { CButton, CCard, CCardBody, CCol, CContainer, CForm, CInput, CInputGroup, CInputGroupPrepend, CInputGroupText, CRow } from '@coreui/react';
import CIcon from '@coreui/icons-react';
import ReactLoading from 'react-loading';

const Login = (props) => {
    const url = props.location.state? props.location.state.url : '/';
    const history = useHistory();
    const [carregada, mudarCarregada] = useState(false);
    const usuario = useSelector(estado => estado.usuario);
    const dispatch = useDispatch();
    const [email, mudarEmail] = useState('');
    const [senha, mudarSenha] = useState('');

    useEffect(() => {
        if (usuario) {
            history.push(url);
        }
        mudarCarregada(true);
    }, [usuario, history, url]);

    const logar = (e) => {
        e.preventDefault();
        mudarCarregada(false);
        if (email === '' || senha === '') {
            mudarCarregada(true);
        } else {
            let obj = {
                email,
                password: senha
            }
            axios.post(`${URL.backend}login`, obj)
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
            .catch (erro => {
                mudarCarregada(true);
                console.log(erro);
            })
        }
        
    }

    const esqueceuSenha = () => {
        //let mensagem = 'A parte de cadastro ainda está sendo feita, logo logo você poderá realizar seu cadastro e usufruir da plataforma.';
        //adicionarAvisos('alerta', mensagem);
    }

    const logarGoogle = (respostaGoogle) => {
        mudarCarregada(false);
        let objRequisição = {
            email: respostaGoogle.profileObj.email,
            googleId: respostaGoogle.profileObj.googleId
        }
        axios.post(`${URL.backend}loginGoogle`, objRequisição)
        .then(resposta => {
            if (resposta.data.sucesso) {
                let token = resposta.data.data.access_token;
                let config = {
                    headers: {
                        'Authorization': `Bearer ${token}`
                    }
                }
                axios.get(`${URL.backend}me`, config)
                .then(respostaMe => {
                    let obj = {
                        id: respostaMe.data.id,
                        nome: respostaMe.data.name,
                        email: respostaMe.data.email,
                        imagem: respostaMe.data.foto,
                        googleId: respostaMe.data.googleId,
                        token
                    }
                    dispatch({ type: 'LOGAR', obj });
                })
                .catch (erro => {
                    console.log(erro)
                })
            } else {
                mudarCarregada(true);
            }
        })
        .catch (erro => {
            console.log(erro)
        })
    }

    const responseGoogleFailure = (resposta) => {
        console.log(resposta)
    }

    if (usuario) {
        return <Redirect to={url} />;
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
                                        <CForm onSubmit={logar}>
                                            <CInputGroup className="mb-3">
                                                <CInputGroupPrepend>
                                                    <CInputGroupText>
                                                        <CIcon name="cil-user" />
                                                    </CInputGroupText>
                                                </CInputGroupPrepend>
                                                <CInput type="text" value={email} placeholder="E-mail" autoComplete="username" onChange={(e) => mudarEmail(e.target.value)} />
                                            </CInputGroup>
                                            <CInputGroup className="mb-4">
                                                <CInputGroupPrepend>
                                                    <CInputGroupText>
                                                        <CIcon name="cil-lock-locked" />
                                                    </CInputGroupText>
                                                </CInputGroupPrepend>
                                                <CInput type="password" value={senha} placeholder="Senha" autoComplete="current-password" onChange={(e) => mudarSenha(e.target.value)} />
                                            </CInputGroup>
                                            <CRow>
                                                <CCol>
                                                    <CButton type="submit" color="primary" className="px-4">Login</CButton>
                                                </CCol>
                                                <CCol className="text-right">
                                                    <CButton color="link" className="px-0" onClick={esqueceuSenha}>Esqueceu a senha?</CButton>
                                                </CCol>
                                            </CRow>
                                            <CRow className="justify-content-center">
                                                <CCol xs="6" className="text-center">
                                                    <Link to="/usuario/cadastro">Cadastrar</Link>
                                                </CCol>
                                            </CRow>
                                        </CForm>
                                    </CCardBody>
                                </CCard>
                            </CCol>
                        </CRow>
                        <CRow className="justify-content-center">
                            <CCol xs="12" md="5" className="text-center">
                                <GoogleLogin
                                    clientId={'521591936326-fm12u7ops53qufcosfj3n5u475pdn4do.apps.googleusercontent.com'}
                                    buttonText={'Continuar com Google'}
                                    onSuccess={logarGoogle}
                                    onFailure={responseGoogleFailure}
                                    isSignedIn={true}
                                />
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

export default Login
