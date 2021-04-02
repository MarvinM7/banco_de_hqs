import React from 'react';
import { createBottomTabNavigator } from '@react-navigation/bottom-tabs';
import Senha from './senha';
import Login from './login';

const Tab = createBottomTabNavigator();

const Rotas = ({navigation}) => {

	return (
        <Tab.Navigator>
            <Tab.Screen name="Títulos" component={Senha} />
            <Tab.Screen name="Meus Títulos" component={Login} />
            <Tab.Screen name="Configurações" component={Login} />
        </Tab.Navigator>
	);
}

export default Rotas;