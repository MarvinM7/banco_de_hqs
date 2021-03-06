import React, { useEffect, useState } from 'react';
import axios from 'axios';
import { useHistory } from "react-router-dom";
import URL from '../../componentes/Url/Url.jsx';
import ReactLoading from 'react-loading';
import { CCol, CContainer, CRow } from '@coreui/react';
import Tabela from '../../componentes/Tabela/Tabela';

const TitulosLista = () => {
    const history = useHistory();
    const [carregada, mudarCarregada] = useState(false);
    const [colunas, mudarColunas] = useState([]);
    const [linhas, mudarLinhas] = useState([]);

    useEffect(() => {
        axios.all([
            axios.post(`${URL.backend}titulos/lista`),
            axios.post(`${URL.backend}editoras/lista`),
            axios.post(`${URL.backend}titulos_status/lista`),
        ])
        .then(axios.spread((...respostas) => {
            if (respostas[0].data.sucesso) {
                let linhasAux = [];
                respostas[0].data.data.forEach((titulo) => {
                    linhasAux.push({
                        id: titulo.id,
                        nome: titulo.nome,
                        editora_id: titulo.editora_id,
                        editora_nome: titulo.editora_nome,
                        volume: titulo.volumes.length,
                        volumes: titulo.volumes,
                        status_id: titulo.status_id,
                        status_nome: titulo.status_nome
                    })
                })
                mudarLinhas(linhasAux);
            }

            let editorasString = '';
            if (respostas[1].data.sucesso) {
                editorasString = '{';
                respostas[1].data.data.forEach((editora, index) => {
                    editorasString += `"${editora.nome}" : "${editora.nome}"`;
                    if (index !== respostas[1].data.data.length - 1) {
                        editorasString += ', ';
                    }
                })
                editorasString += '}';
            }

            let statusString = '';
            if (respostas[2].data.sucesso) {
                statusString = '{';
                respostas[2].data.data.forEach((status, index) => {
                    statusString += `"${status.nome}" : "${status.nome}"`;
                    if (index !== respostas[2].data.data.length - 1) {
                        statusString += ', ';
                    }
                })
                statusString += '}';
            }

            let colunasAux = [
                {title: 'Nome', field: 'nome'},
                {title: 'Editora', field: 'editora_nome', lookup: JSON.parse(editorasString)},
                {title: 'Volumes', field: 'volume', type: 'numeric', width: '10%', align: 'left', cellStyle: {
                    textAlign: "center"
                }},
                {title: 'Status', field: 'status_nome', lookup: JSON.parse(statusString)},
            ]
            
            mudarColunas(colunasAux);
            mudarCarregada(true);
        }))
        .catch(erro => {
            console.log(erro);
        })
    }, []);

    const cliqueNaLinha = (evento, dados) => {
        history.push({
            pathname: `/titulo/${dados.id}`,
            dados
        });
    }

    return (
        <React.Fragment>
            {carregada?
                <React.Fragment>
                    <Tabela
                        colunas={colunas}
                        linhas={linhas}
                        titulo="Lista de t??tulos"
                        cliqueNaLinha={cliqueNaLinha}
                        paginacao={true}
                    />
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

export default TitulosLista
