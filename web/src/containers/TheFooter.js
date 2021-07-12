import React from 'react';
import { CFooter } from '@coreui/react';

const TheFooter = () => {
  	return (
		<CFooter fixed={false}>
			<div>
				<span className="ml-1">&copy; 2021 </span>
				<a href="https://www.linkedin.com/in/marvin-miguel-da-silva-8b8464164/" target="_blank" rel="noopener noreferrer">Marvin Miguel</a>
			</div>
		</CFooter>
  	)
}

export default React.memo(TheFooter)
