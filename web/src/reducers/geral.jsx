const ESTADO_INICIAL = {
    sidebarShow: 'responsive',
}

function geral(estado = ESTADO_INICIAL, { type, ...rest }) {
    switch (type) {
        case 'set':
            return {...estado, ...rest }
        default:
            return estado;
    }
}

export default geral;
