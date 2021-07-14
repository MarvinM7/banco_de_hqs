import React from 'react';
//import * as Requisicao from '../../componentes/Requisicao/Requisicao.jsx';

const Teste = () => {
    /* const obj = {
        metodo: 'get',
        url: 'testelogado',
        //url: 'titulos/lista',
        data: {teste:'teste'},
        token: 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYmFja2VuZC5iYW5jb2RlaHFzLmNvbS5iclwvYXBpXC9sb2dpbiIsImlhdCI6MTYyNjIxOTIwOCwiZXhwIjoxNjI2MjIyODA4LCJuYmYiOjE2MjYyMTkyMDgsImp0aSI6IjFRRlpaUUNHOXdiWVJVQ0giLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.VvA0hpPt_QyRXyDcxuMohcpHxE4l9ZDX3sQpDXlGNP4'
    } */

    const testando = () => {
        console.log('testando1')
        /* Requisicao.Requisicao(obj).then((resposta) => {
            console.log(resposta);
        }); */
    }

    return (
        <React.Fragment>
            <button onClick={testando}>teste</button>
        </React.Fragment>
    )
}

export default Teste
