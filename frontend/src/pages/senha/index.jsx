import React from 'react';
import { StatusBar } from 'expo-status-bar';
import { StyleSheet, Text, View } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Button, TextInput } from 'react-native-paper';

const Senha = ({navigation}) => {
    const [email, setEmail] = React.useState('');

	return (
        <SafeAreaView
            style={styles.pagina}
        >
            <StatusBar barStyle="light-content" backgroundColor="#6a51ae" />
            <TextInput
                style={styles.input}
                label={'Email'}
                placeholder={'Digite seu e-mail'}
                value={email}
                mode={'outlined'}
                onChangeText={email => setEmail(email)}
            />
            <Button
                style={styles.botao}
                mode={'outlined'}
                onPress={() => navigation.navigate('Cadastro')}
            >
                ENVIAR
            </Button>
        </SafeAreaView>
	);
}

const styles = StyleSheet.create({
	pagina: {
		flex: 1,
		backgroundColor: '#f00',
		alignItems: 'center',
		justifyContent: 'center',
	},
    input: {
		width: '80%',
	},
    botao: {
        width: '80%',
        backgroundColor: '#380583'
    }
});

export default Senha;