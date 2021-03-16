import 'react-native-gesture-handler';
import React from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';
import Login from './src/pages/login';
import Cadastro from './src/pages/cadastro';
import Senha from './src/pages/senha';
import Rotas from './src/pages/rotas';

const Stack = createStackNavigator();

export default function App() {
	return (
		<NavigationContainer>
			<Stack.Navigator
				screenOptions={{
					headerShown: false
				}}
				initialRouteName="Senha"
			>
				<Stack.Screen name="Login" component={Login} />
				<Stack.Screen name="Cadastro" component={Cadastro} />
				<Stack.Screen name="Senha" component={Senha} />
				<Stack.Screen name="Rotas" component={Rotas} />
			</Stack.Navigator>
		</NavigationContainer>
	);
}