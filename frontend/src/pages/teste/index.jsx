import React from 'react';
import { StyleSheet, Text, View } from 'react-native';
import { SafeAreaView } from 'react-native-safe-area-context';
import { StatusBar } from 'expo-status-bar';

export default function Teste() {
	return (
		<SafeAreaView
            style={styles.container}
        >
            <Text>
                Teste
            </Text>
            <StatusBar barStyle="light-content" backgroundColor="#6a51ae" />
        </SafeAreaView>
	);
}

const styles = StyleSheet.create({
	container: {
		flex: 1,
		backgroundColor: '#F0F',
		alignItems: 'center',
		justifyContent: 'center',
	},
});
