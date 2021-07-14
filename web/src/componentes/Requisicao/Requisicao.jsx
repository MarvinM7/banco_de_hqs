/* import URL from "../Url/Url";
import axios from 'axios';

export const Requisicao = (props) => {
    console.log(props)
    return axios({
        method: props.metodo,
        url: `${URL.backend}${props.url}`,
        data: props.data,
        headers: {
            'Authorization': `Bearer ${props.token}`
        }
    })
    .then(resposta => {
        console.log(resposta);
        if (resposta.data.sucesso) {
            return {
                sucesso: true,
                resposta: resposta.data.data
            };
        } else {
            let respostaStatus = '';
            switch(resposta.data.status) {
                case 'Token inválido':
                    respostaStatus = 'Token inválido';
                    break;
                case 'Token expirado':
                    respostaStatus = 'Token expirado';
                    break;
                case 'Token não encontrado':
                    respostaStatus = 'Token não encontrado';
                    break;
                default:
                    break;
            }
        }
    })
    .catch(resposta => {
        throw resposta;
    });
}
 */