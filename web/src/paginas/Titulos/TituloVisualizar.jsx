import React, { useEffect, useState } from 'react';
import axios from 'axios';
import URL from '../../componentes/Url/Url.jsx';
import { useHistory } from "react-router-dom";
import ReactLoading from 'react-loading';
import { /* CButton, */ CCol, CContainer, CRow } from '@coreui/react';
//import { FaChevronLeft } from "react-icons/fa";

const TituloVisualizar = (props) => {
    const history = useHistory();
    const { id } = props.match.params;
    const [carregada, mudarCarregada] = useState(false);
    const [titulo, mudarTitulo] = useState({});

    useEffect(() => {
        if (history.location.dados) {
            mudarTitulo(history.location.dados);
            mudarCarregada(true);
        } else {
            let obj = {
                id
            }
            axios.post(`${URL.backend}titulo/visualizar`, obj)
            .then(resposta => {
                mudarTitulo(resposta.data.data[0]);
                mudarCarregada(true);
            })
            .catch(erro => {
                console.log(erro);
            })
        }
    }, [id, history.location.dados]);

    return (
        <React.Fragment>
            {carregada?
                <React.Fragment>
                    {history.location.dados
                    ?
                        /* <CButton onClick={() => history.goBack()}>
                            <FaChevronLeft
                                size='30px'
                                title='Voltar'
                            />
                        </CButton> */
                        null
                    :
                        null
                    }
                    <div>{`Nome: ${titulo.nome}`}</div>
                    <div>{`Editora: ${titulo.editora_nome}`}</div>
                    <div>{`Status: ${titulo.status_nome}`}</div>
                    <div>{`Volumes: ${titulo.volumes.length}`}</div>
                    {titulo.observacao?
                        <div>{`Observação: ${titulo.observacao}`}</div>
                    :
                        null
                    }
                    {titulo.volumes.map((volume, index) => {
                        let data = volume.data_lancamento.split('-');
                        return (
                            <div key={index}>
                                {`${volume.nome} - ${data[2]}/${data[1]}/${data[0]} - R$ ${volume.preco.toFixed(2)} ${volume.observacao ? '- ' + volume.observacao : ''}`}
                            </div>
                        )
                    })}
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
