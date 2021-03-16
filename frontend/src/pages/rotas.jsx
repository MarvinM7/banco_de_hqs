import React from 'react';
import { createBottomTabNavigator } from '@react-navigation/bottom-tabs';
import Senha from './senha';
import Login from './login';

const Tab = createBottomTabNavigator();

const Rotas = ({navigation}) => {

	return (
        <Tab.Navigator>
            <Tab.Screen name="Senha" component={Senha} />
            <Tab.Screen name="Login" component={Login} />
            <Tab.Screen name="Login2" component={Login} />
        </Tab.Navigator>
	);
}

export default Rotas;