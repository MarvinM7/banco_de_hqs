import React from 'react';
import { useDispatch, useSelector } from 'react-redux';
import { useGoogleLogout } from 'react-google-login';
import { /* CBadge, */ CDropdown,	CDropdownItem, CDropdownMenu, CDropdownToggle, CImg } from '@coreui/react'
import CIcon from '@coreui/icons-react'

const TheHeaderDropdown = () => {
	const usuario = useSelector(estado => estado.usuario);
	const dispatch = useDispatch();

	const deslogar = () => {
		dispatch({type: 'DESLOGAR'})
	}

	const { signOut } = useGoogleLogout({
		clientId: '521591936326-fm12u7ops53qufcosfj3n5u475pdn4do.apps.googleusercontent.com',
		onLogoutSuccess: deslogar,
		onFailure: deslogar,
		/* jsSrc,
		cookiePolicy,
		loginHint,
		hostedDomain,
		fetchBasicProfile,
		discoveryDocs,
		uxMode,
		redirectUri,
		scope,
		accessType, */
	})

	return (
		<CDropdown
			inNav
			className="c-header-nav-items mx-2"
			direction="down"
		>
			<CDropdownToggle className="c-header-nav-link" caret={false}>
				<div className="c-avatar">
					<CImg
						src={usuario.imagem}
						className="c-avatar-img"
						alt="Foto perfil"
					/>
				</div>
			</CDropdownToggle>
			<CDropdownMenu className="pt-0" placement="bottom-end">
				{/* <CDropdownItem
					header
					tag="div"
					color="light"
					className="text-center"
				>
					<strong>Account</strong>
				</CDropdownItem>
				<CDropdownItem>
					<CIcon name="cil-bell" className="mfe-2" />
					Updates
					<CBadge color="info" className="mfs-auto">42</CBadge>
				</CDropdownItem>
				<CDropdownItem>
					<CIcon name="cil-envelope-open" className="mfe-2" />
					Messages
					<CBadge color="success" className="mfs-auto">42</CBadge>
				</CDropdownItem>
				<CDropdownItem>
					<CIcon name="cil-task" className="mfe-2" />
					Tasks
					<CBadge color="danger" className="mfs-auto">42</CBadge>
				</CDropdownItem>
				<CDropdownItem>
					<CIcon name="cil-comment-square" className="mfe-2" />
					Comments
					<CBadge color="warning" className="mfs-auto">42</CBadge>
				</CDropdownItem>
				<CDropdownItem
					header
					tag="div"
					color="light"
					className="text-center"
				>
					<strong>Settings</strong>
				</CDropdownItem>
				<CDropdownItem>
					<CIcon name="cil-user" className="mfe-2" />
					Profile
				</CDropdownItem>
				<CDropdownItem>
					<CIcon name="cil-settings" className="mfe-2" />
					Settings
				</CDropdownItem>
				<CDropdownItem>
					<CIcon name="cil-credit-card" className="mfe-2" />
					Payments
					<CBadge color="secondary" className="mfs-auto">42</CBadge>
				</CDropdownItem>
				<CDropdownItem>
					<CIcon name="cil-file" className="mfe-2" />
					Projects
					<CBadge color="primary" className="mfs-auto">42</CBadge>
				</CDropdownItem>
				<CDropdownItem divider /> */}
				<CDropdownItem onClick={() => signOut()}>
					<CIcon name="cil-lock-locked" className="mfe-2" />
					Deslogar
				</CDropdownItem>
			</CDropdownMenu>
		</CDropdown>
	)
}

export default TheHeaderDropdown
