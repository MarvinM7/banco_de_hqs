import React, { useEffect, useState } from 'react';
import { useDispatch, useSelector } from 'react-redux';
import { useGoogleLogin } from 'react-google-login';
import axios from 'axios';
import URL from '../../componentes/Url/Url';
import { CButton, CCard, CCardBody, CCardFooter, CCol, CContainer, CForm, CFormGroup, CInput, CInputGroup, CInputGroupPrepend, CInputGroupText, CInvalidFeedback, CLabel, CRow } from '@coreui/react';
import { FaEnvelope, FaLock, FaUserAlt } from "react-icons/fa";
import { FcGoogle } from "react-icons/fc";
import { useHistory } from 'react-router';
import ReactLoading from 'react-loading';

const Cadastro = () => {
    const [carregada, mudarCarregada] = useState(false);
    const history = useHistory();
    const usuario = useSelector(estado => estado.usuario);
    const dispatch = useDispatch();
    const [nome, mudarNome] = useState('');
    const [nomeErro, mudarNomeErro] = useState(false);
    const [nomeErroMensagem, mudarNomeErroMensagem] = useState('');
    const [email, mudarEmail] = useState('');
    const [emailErro, mudarEmailErro] = useState(false);
    const [emailErroMensagem, mudarEmailErroMensagem] = useState('');
    const [senha, mudarSenha] = useState('');
    const [senhaErro, mudarSenhaErro] = useState(false);
    const [senhaErroMensagem, mudarSenhaErroMensagem] = useState('');

    useEffect(() => {
        if (usuario) {
            history.push('/');
        }
        mudarCarregada(true);
    }, [usuario, history]);

    const mudarNomeFuncao = (evento) => {
        mudarNome(evento.target.value);
        mudarNomeErro(false);
        mudarNomeErroMensagem('');
    }

    const mudarEmailFuncao = (evento) => {
        mudarEmail(evento.target.value);
        mudarEmailErro(false);
        mudarEmailErroMensagem('');
    }

    const mudarSenhaFuncao = (evento) => {
        mudarSenha(evento.target.value);
        mudarSenhaErro(false);
        mudarSenhaErroMensagem('');
    }

    const cadastrar = (e) => {
        e.preventDefault();
        mudarCarregada(false);
        let checador = true;
        if (nome === '') {
            checador = false;
            mudarNomeErro(true);
            mudarNomeErroMensagem('O campo não pode ficar vazio');
        }

        if (email === '') {
            checador = false;
            mudarEmailErro(true);
            mudarEmailErroMensagem('O campo não pode ficar vazio');
        } else if (email.split('@').length !== 2) {
            checador = false;
            mudarEmailErro(true);
            mudarEmailErroMensagem('Formato de e-mail inválido');
        } else if (!email.split('@')[0] || !email.split('@')[1]) {
            checador = false;
            mudarEmailErro(true);
            mudarEmailErroMensagem('Formato de e-mail inválido');
        } else if (email.split('@')[1].split('.').length < 2) {
            checador = false;
            mudarEmailErro(true);
            mudarEmailErroMensagem('Formato de e-mail inválido');
        } else if (!email.split('@')[1].split('.')[0] || !email.split('@')[1].split('.')[1]) {
            checador = false;
            mudarEmailErro(true);
            mudarEmailErroMensagem('Formato de e-mail inválido');
        }

        if (senha === '') {
            checador = false;
            mudarSenhaErro(true);
            mudarSenhaErroMensagem('O campo não pode ficar vazio');
        } else if (senha.length < 6) {
            checador = false;
            mudarSenhaErro(true);
            mudarSenhaErroMensagem('A senha precisa ter pelo menos 6 dígitos');
        }

        if (checador) {
            let obj = {
                nome,
                email,
                senha
            }
            axios.post(`${URL.backend}usuario/inserir`, obj)
            .then(resposta => {
                if (resposta.data.sucesso) {
                    switch(resposta.data.data) {
                        case 'Inserido com sucesso.':
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
                                }
                            })
                            .catch (erro => {
                                console.log(erro);
                            })
                            break;
                        default:
                            break;
                    }
                } else {
                    switch(resposta.data.erro) {
                        case 'E-mail já cadastrado.':
                            mudarEmailErro(true);
                            mudarEmailErroMensagem('E-mail já cadastrado.');
                            break;
                        default:
                            break;
                    }
                    mudarCarregada(true);
                }
            })
            .catch(resposta => {
                console.log(resposta);
            })
        } else {
            mudarCarregada(true);
        }
    }

    const cadastrarGoogle = (props) => {
        mudarCarregada(false);
        let { email, googleId, name: nome } = props.profileObj;

        let obj = {
            nome,
            email,
            googleId
        }
        axios.post(`${URL.backend}usuario/inserirGoogle`, obj)
        .then(resposta => {
            if (resposta.data.sucesso) {
                let obj = {
                    email,
                    googleId
                }
                axios.post(`${URL.backend}loginGoogle`, obj)
                .then(resposta2 => {
                    if (resposta.data.sucesso) {
                        let obj = {
                            id: resposta.data.data,
                            nome,
                            email,
                            imagem: null,
                            googleId,
                            token: resposta2.data.data.access_token
                        }
                        dispatch({ type: 'LOGAR', obj });
                    }
                })
                .catch (erro => {
                    console.log(erro);
                })
            } else {
                switch(resposta.data.erro) {
                    case 'E-mail já cadastrado.':
                        mudarEmailErro(true);
                        mudarEmailErroMensagem('E-mail já cadastrado.');
                        break;
                    default:
                        break;
                }
                mudarCarregada(true);
            }
        })
        .catch(resposta => {
            console.log(resposta);
        })
    }

    const { signIn } = useGoogleLogin({
        onSuccess: cadastrarGoogle,
        clientId: '521591936326-fm12u7ops53qufcosfj3n5u475pdn4do.apps.googleusercontent.com',
        onFailure: props => console.log(props)
    })

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
                                        <CForm onSubmit={cadastrar}>
                                            <h1 style={{textAlign: 'center'}}>Cadastrar</h1>
                                            <CFormGroup>
                                                <CRow>
                                                    <CCol md="12">
                                                        <CLabel htmlFor="nome">Nome</CLabel>
                                                        <CInputGroup>
                                                            <CInputGroupPrepend>
                                                                <CInputGroupText>
                                                                    <FaUserAlt />
                                                                </CInputGroupText>
                                                            </CInputGroupPrepend>
                                                            <CInput type="text" id="nome" name="nome" value={nome} onChange={mudarNomeFuncao} placeholder="Digite seu nome" autoComplete={'on'} invalid={nomeErro} />
                                                            <CInvalidFeedback>{nomeErroMensagem}</CInvalidFeedback>
                                                        </CInputGroup>
                                                    </CCol>
                                                </CRow>
                                            </CFormGroup>
                                            
                                            <CFormGroup>
                                                <CRow>
                                                    <CCol md="12">
                                                        <CLabel htmlFor="email">E-mail</CLabel>
                                                        <CInputGroup>
                                                            <CInputGroupPrepend>
                                                                <CInputGroupText>
                                                                    <FaEnvelope />
                                                                </CInputGroupText>
                                                            </CInputGroupPrepend>
                                                            <CInput type="email" id="email" name="email" value={email} onChange={mudarEmailFuncao} placeholder="Digite seu e-mail" autoComplete={'on'} invalid={emailErro} />
                                                            <CInvalidFeedback>{emailErroMensagem}</CInvalidFeedback>
                                                        </CInputGroup>    
                                                    </CCol>
                                                </CRow>    
                                            </CFormGroup>

                                            <CFormGroup>
                                                <CRow>
                                                    <CCol md="12">
                                                        <CLabel htmlFor="senha">Senha</CLabel>
                                                        <CInputGroup>
                                                            <CInputGroupPrepend>
                                                                <CInputGroupText>
                                                                    <FaLock />
                                                                </CInputGroupText>
                                                            </CInputGroupPrepend>
                                                            <CInput type="password" id="senha" name="senha" value={senha} onChange={mudarSenhaFuncao} placeholder="Digite sua senha" autoComplete={'on'} invalid={senhaErro} />
                                                            <CInvalidFeedback>{senhaErroMensagem}</CInvalidFeedback>
                                                        </CInputGroup>
                                                    </CCol>
                                                </CRow>    
                                            </CFormGroup>
                                            <CButton type="submit" color="primary" block>Cadastrar</CButton>
                                        </CForm>
                                    </CCardBody>
                                    <CCardFooter>
                                        <CRow>
                                            <CCol md="12">
                                                <CButton
                                                    onClick={signIn}
                                                    block
                                                    style={{boxShadow: 'rgb(0 0 0 / 24%) 0px 2px 2px 0px, rgb(0 0 0 / 24%) 0px 0px 1px 0px'}}
                                                >
                                                    <div style={{display: 'inline-flex', alignItems: 'center', textAlign: 'center', justifyContent: 'space-around'}}>
                                                        <FcGoogle 
                                                            size={'20'}
                                                            style={{
                                                                marginRight: '10px'
                                                            }}
                                                        />
                                                        {'Continuar com Google'}
                                                    </div>
                                                </CButton>
                                            </CCol>
                                        </CRow>
                                    </CCardFooter>
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

export default Cadastro;
