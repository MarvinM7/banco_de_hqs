import 'react-app-polyfill/ie11'; // For IE 11 support
import 'react-app-polyfill/stable';
import 'core-js';
import './polyfill'
import React from 'react';
import ReactDOM from 'react-dom';
import { PersistGate } from 'redux-persist/integration/react'
import App from './App';

import { icons } from './assets/icons';

import { Provider } from 'react-redux';
import { persistor, store } from "./store.js";

React.icons = icons

ReactDOM.render(
	<Provider store={store}>
		<PersistGate loading={null} persistor={persistor}>
			<App/>
		</PersistGate>			
	</Provider>,
  document.getElementById('root')
);
