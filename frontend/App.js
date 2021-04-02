import 'react-native-gesture-handler';
import React from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';
import Login from './src/pages/login';
import Cadastro from './src/pages/cadastro';
import Senha from './src/pages/senha';
import Rotas from './src/pages/rotas';

const Stack = createStackNavigator();

const App = () => {
	//Marvin verificar login, se tiver logado, pagina inicial vai pra rotas, se não, vai pra login mesmo
	let teste = 'Login';

	return (
		<NavigationContainer>
			<Stack.Navigator
				screenOptions={{
					headerShown: false
				}}
				initialRouteName={teste}
			>
				<Stack.Screen name="Login" component={Login} />
				<Stack.Screen name="Cadastro" component={Cadastro} />
				<Stack.Screen name="Senha" component={Senha} />
				<Stack.Screen name="Rotas" component={Rotas} />
			</Stack.Navigator>
		</NavigationContainer>
	);
}

export default App;