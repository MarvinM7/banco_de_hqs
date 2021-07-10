import React, { useEffect, useState } from 'react';
import axios from 'axios';
import { CCol, CContainer, CRow } from '@coreui/react';

const Teste = () => {
    const [carregada, mudarCarregada] = useState(false);
    const [titulos, mudarTitulos] = useState([]);

    useEffect(() => {
        axios.post('http://backend.bancodehqs.com.br/api/titulos/lista')
        .then(function (response) {
            console.log(response);
            if (response.data.sucesso) {
                mudarTitulos(response.data.data);
            }
            mudarCarregada(true);
        })
        .catch(function (error) {
            console.log(error);
        })
    }, []);

    return (
        <React.Fragment>
            {carregada?
                <React.Fragment>
                    {titulos.length > 0?
                        titulos.map((titulo, index) => {
                            return (
                                <div key={index}>
                                    {`${titulo.id} - ${titulo.nome} - ${titulo.volumes.length} ${titulo.volumes.length > 1 ? 'volumes' : 'volume'} - ${titulo.status_nome} - ${titulo.editora_nome}`}
                                </div>
                            )
                        })
                    :
                        <div className="c-app c-default-layout flex-row align-items-center">
                            <CContainer>
                                <CRow className="justify-content-center">
                                    <CCol md="6">
                                        Sem título cadastrado
                                    </CCol>
                                </CRow>
                            </CContainer>
                        </div>
                    }
                </React.Fragment>
            :
                <div className="c-app c-default-layout flex-row align-items-center">
                    <CContainer>
                        <CRow className="justify-content-center">
                            <CCol lg="12" className="text-center">
                                Carregando
                            </CCol>
                        </CRow>
                    </CContainer>
                </div>
            }
        </React.Fragment>
    )
}

export default Teste
