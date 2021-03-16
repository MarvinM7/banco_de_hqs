import React from 'react';
import { StatusBar } from 'expo-status-bar';
import { StyleSheet, Text, View } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Button, TextInput } from 'react-native-paper';

const Cadastro = ({navigation}) => {
    const [nome, setNome] = React.useState('');
    const [email, setEmail] = React.useState('');
    const [senha, setSenha] = React.useState('');
    const [confirmarSenha, setConfirmarSenha] = React.useState('');

	return (
        <SafeAreaView
            style={styles.pagina}
        >
            <StatusBar barStyle="light-content" backgroundColor="#6a51ae" />
            <Button
                style={styles.botao}
                mode={'outlined'}
                icon={'google'}
                onPress={() => navigation.navigate('Login')}
            >
                LOGAR COM GOOGLE
            </Button>
            <Text>
                OU
            </Text>
            <TextInput
                style={styles.input}
                label={'Nome'}
                placeholder={'Digite seu nome'}
                value={nome}
                mode={'outlined'}
                onChangeText={nome => setNome(nome)}
            />
            <TextInput
                style={styles.input}
                label={'Email'}
                placeholder={'Digite seu e-mail'}
                value={email}
                mode={'outlined'}
                onChangeText={email => setEmail(email)}
            />
            <TextInput
                style={styles.input}
                label={'Senha'}
                placeholder={'Digite sua senha'}
                value={senha}
                secureTextEntry={true}
                mode={'outlined'}
                onChangeText={senha => setSenha(senha)}
            />
            <TextInput
                style={styles.input}
                label={'Confirmar senha'}
                placeholder={'Digite sua senha'}
                value={confirmarSenha}
                secureTextEntry={true}
                mode={'outlined'}
                onChangeText={confirmarSenha => setConfirmarSenha(confirmarSenha)}
            />
            <Button
                style={styles.botao}
                mode={'outlined'}
                onPress={() => console.log('logar')}
            >
                CADASTRAR
            </Button>
        </SafeAreaView>
	);
}

const styles = StyleSheet.create({
	pagina: {
		flex: 1,
		backgroundColor: '#fFff00',
		alignItems: 'center',
		justifyContent: 'center',
	},
    input: {
		width: '80%',
	},
    botao: {
        width: '80%',
        backgroundColor: 'red'
    }
});

export default Cadastro;