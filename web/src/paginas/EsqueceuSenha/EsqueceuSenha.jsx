import React, { useEffect, useState } from 'react';
import axios from 'axios';
import URL from '../../componentes/Url/Url';
import { CButton, CCard, CCardBody, CCol, CContainer, CForm, CInput, CInputGroup, CInputGroupPrepend, CInputGroupText, CRow } from '@coreui/react';
import { FaEnvelope } from "react-icons/fa";
import ReactLoading from 'react-loading';
import { useHistory } from 'react-router';
import Aviso from '../../componentes/Aviso/Aviso';

const EsqueceuSenha = (props) => {
    const [carregada, mudarCarregada] = useState(false);
    const [email, mudarEmail] = useState('');
    const [avisos, mudarAvisos] = useState([]);
    const history = useHistory();

    useEffect(() => {
        if (history.location.state) {
            mudarEmail(history.location.state.email);
        }
        mudarCarregada(true);
    }, [history]);

    const recuperarSenha = (e) => {
        mudarCarregada(false);
        e.preventDefault();
        let obj = {
            email
        }
        axios.post(`${URL.backend}esqueceusenha`, obj)
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
                    mensagem: 'Um e-mail foi enviado para sua conta para você poder continuar com a recuperação da senha.'
                })
                mudarAvisos(avisosAux);
            } else {
                console.log(resposta);
            }
            mudarCarregada(true);
        })
        .catch(resposta => {
            console.log(resposta);
            mudarCarregada(true);
        })
        
    }

    return (
        <React.Fragment>
            <Aviso avisos={avisos} />
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
                                                <CInput type="text" value={email} placeholder="E-mail" autoComplete="email" onChange={(e) => mudarEmail(e.target.value)} />
                                            </CInputGroup>
                                            <CButton type="submit" color="primary" block>Recuperar senha</CButton>
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

export default EsqueceuSenha;
