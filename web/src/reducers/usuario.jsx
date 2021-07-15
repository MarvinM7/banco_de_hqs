const ESTADO_INICIAL = null;

function usuario(estado = ESTADO_INICIAL, acao) {
    let id, nome, email, imagem, googleId, token;
    switch (acao.type) {
        case 'LOGAR':
            id = acao.obj.id;
            nome = acao.obj.nome;
            email = acao.obj.email;
            imagem = acao.obj.imagem;
            googleId = acao.obj.googleId;
            token = acao.obj.token;
            return { id, nome, email, imagem, googleId, token };
        case 'DESLOGAR':
            return null;
        case 'RENOVAR_TOKEN':
            token = acao.obj.token;
            return { ...estado, token };
        default:
            return estado;
    }
}

export default usuario;
