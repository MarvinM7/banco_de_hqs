import React from 'react';
import { StatusBar } from 'expo-status-bar';
import { StyleSheet, Text, TouchableOpacity, View } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { Button, TextInput } from 'react-native-paper';

const Login = ({navigation}) => {
    const [email, setEmail] = React.useState('');
    const [senha, setSenha] = React.useState('');

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
            <TextInput
                style={styles.input}
                label={'Senha'}
                placeholder={'Digite sua senha'}
                value={senha}
                secureTextEntry={true}
                mode={'outlined'}
                onChangeText={senha => setSenha(senha)}
            />
            <Button
                style={styles.botao}
                mode={'outlined'}
                onPress={() => console.log('login')}
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
		backgroundColor: '#f0ff',
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

export default Login;