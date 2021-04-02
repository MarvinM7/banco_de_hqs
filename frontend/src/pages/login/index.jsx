import React from 'react';
import { StatusBar } from 'expo-status-bar';
import { Image, StyleSheet, Text, TouchableOpacity, View } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Button, TextInput } from 'react-native-paper';

const Login = ({navigation}) => {
    const [email, setEmail] = React.useState('');
    const [emailErro, setEmailErro] = React.useState(false);
    const [mensagemErroEmail, setMensagemEmailErro] = React.useState('');
    const [senha, setSenha] = React.useState('');
    const [senhaErro, setSenhaErro] = React.useState(false);
    const [mensagemErroSenha, setMensagemSenhaErro] = React.useState('');

    mudarEmail = (email) => {
        setEmailErro(false);
        setEmail(email);
        setMensagemEmailErro('');
    }

    mudarSenha = (senha) => {
        setSenhaErro(false);
        setSenha(senha);
        setMensagemSenhaErro('');
    }

    logarEmail = () => {
        if (email == '') {
            setEmailErro(true);
            setMensagemEmailErro('Campo de e-mail está vazio');
        }
        if (senha == '') {
            setSenhaErro(true);
            setMensagemSenhaErro('Campo de senha está vazio');
        }
    }

	return (
        <SafeAreaView
            style={styles.pagina}
        >
            <StatusBar barStyle="light-content" backgroundColor="#fff" />
            <Image
                source={require('../../imgs/logo.png')}
            />
            <TextInput
                style={styles.input}
                label={'Email'}
                placeholder={'Digite seu e-mail'}
                value={email}
                error={emailErro}
                mode={'outlined'}
                onChangeText={email => mudarEmail(email)}
            />
            <View
                style={styles.mensagemErroView}
            >
                <Text
                    style={styles.mensagemErroTexto}
                >
                    {mensagemErroEmail}
                </Text>
            </View>
            <TextInput
                style={styles.input}
                label={'Senha'}
                placeholder={'Digite sua senha'}
                value={senha}
                error={senhaErro}
                secureTextEntry={true}
                mode={'outlined'}
                onChangeText={senha => mudarSenha(senha)}
            />
            <View
                style={styles.mensagemErroView}
            >
                <Text
                    style={styles.mensagemErroTexto}
                >
                    {mensagemErroSenha}
                </Text>
            </View>
            <Button
                style={styles.botao}
                mode={'outlined'}
                onPress={() => logarEmail()}
            >
                LOGIN
            </Button>
            <View
                style={{flexDirection: 'row', width: '80%', justifyContent: 'space-between',}}
            >
                <TouchableOpacity 
                    onPress={()=> navigation.navigate('Cadastro')}
                >
                    <Text>Cadastrar</Text>
                </TouchableOpacity>
                <TouchableOpacity 
                    onPress={()=> navigation.navigate('Senha')}
                >
                    <Text>Esqueci a senha</Text>
                </TouchableOpacity>
            </View>
            <Button
                style={styles.botao}
                mode={'outlined'}
                icon={'google'}
                onPress={() => console.log('logar com google')}
            >
                LOGAR COM GOOGLE
            </Button>
            <TouchableOpacity 
                onPress={()=> navigation.navigate('Rotas')}
            >
                <Text>Entrar como visitante</Text>
            </TouchableOpacity>
        </SafeAreaView>
	);
}

const styles = StyleSheet.create({
	pagina: {
		flex: 1,
		backgroundColor: '#fff',
		alignItems: 'center',
		justifyContent: 'center',
	},
    input: {
		width: '80%',
	},
    mensagemErroView: {
        flexDirection: 'row',
        width: '80%',
        justifyContent: 'flex-start'
    },
    mensagemErroTexto: {
        color: '#ac0125',
        justifyContent: 'flex-start',
    },
    botao: {
        width: '80%',
        backgroundColor: '#F00'
    }
});

export default Login;