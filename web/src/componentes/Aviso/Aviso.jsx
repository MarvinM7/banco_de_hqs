import React, { useEffect, useState } from 'react'
import { CToast, CToastBody, CToastHeader, CToaster } from '@coreui/react'

const Aviso = (props) => {
	const [toasts, setToasts] = useState([]);

	const addToast = (props) => {
		let { posicao, esconderAutomatico, botaoFechar, efeito, titulo, mensagem } = props;
		setToasts([
			...toasts, 
			{
				posicao,
				esconderAutomatico,
				closeButton: botaoFechar,
				efeito,
				titulo: titulo === 'sucesso'? 'Sucesso' : titulo === 'erro'? 'Erro' : titulo === 'alerta'? 'Alerta' : 'Aviso',
				mensagem,
				backgroundColor: titulo === 'sucesso'? '#2eb85c' : titulo === 'erro'? '#e55353' : titulo === 'alerta'? '#f9b115' : '#321fdb'
			}
		])
	}
	
	useEffect(() => {
		if (props.avisos.length > 0) {
			addToast(props.avisos[props.avisos.length - 1]);
		}
	}, [props.avisos])

	

	const toasters = (()=>{
		return toasts.reduce((toasters, toast) => {
			toasters[toast.posicao] = toasters[toast.posicao] || [];
			toasters[toast.posicao].push(toast);
			return toasters;
		}, {})
	})();

  	return (
		<React.Fragment>
			{Object.keys(toasters).map((toasterKey) => (
				<CToaster
					position={toasterKey}
					key={'toaster' + toasterKey}
				>
					{toasters[toasterKey].map((toast, key) => {
						return(
							<CToast
								key={'toast' + key}
								show={true}
								autohide={toast.esconderAutomatico}
								fade={toast.efeito}
							>
								<CToastHeader style={{backgroundColor: toast.backgroundColor, color: '#FFF'}} closeButton={toast.botaoFechar}>
									{toast.titulo}
								</CToastHeader>
								<CToastBody>
									{toast.mensagem}
								</CToastBody>
							</CToast>
						)
					})}
				</CToaster>
			))}
		</React.Fragment>
  	)
}

export default Aviso
