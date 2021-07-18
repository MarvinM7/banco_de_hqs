import React, { useEffect, useState } from 'react';
import { CCol, CContainer, CRow } from '@coreui/react';
import ReactLoading from 'react-loading';
import Checklist from '../../componentes/Checklist/Checklist';

const Teste = () => {
    const [carregada, mudarCarregada] = useState(false);

    useEffect(() => {
        mudarCarregada(true);
    }, []);
    
    return (
        <React.Fragment>
            {carregada?
                <CRow className="justify-content-end">
                    <CCol xs={'12'} md={'4'} xl={'3'}>
                        <Checklist
                            editora={{editora_nome: 'JBC', editora_id: 2}}
                        />
                        <Checklist
                            editora={{editora_nome: 'Panini', editora_id: 3}}
                        />
                    </CCol>
                </CRow>
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

export default Teste
