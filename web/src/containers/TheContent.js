import React, { Suspense } from 'react';
import { Route,	Switch } from 'react-router-dom';
import { CContainer, CFade } from '@coreui/react';
import routes from '../routes';
//import AdSense from 'react-adsense';
  
const loading = (
	<div className="pt-3 text-center">
		<div className="sk-spinner sk-spinner-pulse"></div>
	</div>
)

const TheContent = () => {
	return (
		<main className="c-main" style={{marginBottom: '25px'}}>
			<CContainer fluid>
				{/* <AdSense.Google
					client='ca-pub-3046457803721653'
					slot='7806394673'
				/> */}
				<Suspense fallback={loading}>
					<Switch>
						{routes.map((route, idx) => {
							return route.component && (
								<Route
									key={idx}
									path={route.path}
									exact={route.exact}
									name={route.name}
									render={props => (
										<CFade>
											<route.component {...props} />
										</CFade>
									)}
								/>
							)
						})}
					</Switch>
				</Suspense>
			</CContainer>
		</main>
	)
}

export default React.memo(TheContent)
