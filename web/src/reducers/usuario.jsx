const ESTADO_INICIAL = null;

function usuario(estado = ESTADO_INICIAL, acao) {
    switch (acao.type) {
        case 'LOGAR':
            let { id, nome, email, imagem, googleId, token } = acao.obj;
            return { id, nome, email, imagem, googleId, token };
        case 'DESLOGAR':
            return null;
        default:
            return estado;
    }
}

export default usuario;
