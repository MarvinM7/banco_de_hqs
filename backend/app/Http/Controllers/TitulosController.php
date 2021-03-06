<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Titulos;
use App\Models\Volumes;

use DB, Exception;

class TitulosController extends Controller {
    public function lista(Request $obj) {
        try {
            $resposta = Titulos::lista($obj);
            for ($i = 0; $i < count($resposta); $i++) {
                $resposta[$i]['volumes'] = Volumes::listaPorTitulo($resposta[$i]['id']);
            }
            
            return response()->json(['sucesso' => true, 'data' => $resposta]);
        } catch (Exception $erro) {
            throw new Exception($erro->getMessage());
            return response()->json(['sucesso' => false, 'erro' => $erro->getMessage()]);
        }
    }

    public function visualizar(Request $obj) {
        try {
            $resposta = Titulos::visualizar($obj);
            if ($resposta) {
                $resposta[0]['volumes'] = Volumes::listaPorTitulo($obj->id);
            }
            
            return response()->json(['sucesso' => true, 'data' => $resposta]);
        } catch (Exception $erro) {
            throw new Exception($erro->getMessage());
            return response()->json(['sucesso' => false, 'erro' => $erro->getMessage()]);
        }
    }

    public function inserir(Request $obj) {
        DB::beginTransaction();
        try {
            try {
                $titulo = Titulos::create([
                    'nome' => $obj->nome,
                    'editora_id' => $obj->editora,
                    'status_id' => $obj->status,
                    'observacao' => $obj->observacao
                ]);
            } catch (Exception $erro) {
                return response()->json(['sucesso' => false, 'erro' => $erro->getMessage()]);
            }

            DB::commit();
			return response()->json(['sucesso' => true, 'data' => $titulo->id]);
        } catch (Exception $erro) {
            DB::rollBack();
			return response()->json(['sucesso' => false, 'erro' => $erro->getMessage()]);
        }
    }

    public function editar(Request $obj) {
        $titulo = Titulos::find($obj->id);

		if (!$titulo) {
			return response()->json(['sucesso'=> false, 'erro'=> 'T??tulo n??o encontrado.']);
		}

		if ($obj->nome) {
			$titulo->nome = $obj->nome;
		}

        if ($obj->editora) {
			$titulo->editora_id = $obj->editora;
		}

        if ($obj->status) {
			$titulo->status_id = $obj->status;
		}

		$titulo->observacao = $obj->observacao;

        DB::beginTransaction();

		try {
			try {
				$titulo->save();
			} catch (Exception $error) {
				throw new Exception('Erro ao editar.');
			}

			DB::commit();
			return response()->json(['sucesso'=> true, 'data' => 'Registro salvo com sucesso']);
		} catch (Exception $error) {
			DB::rollBack();
			return response()->json(['success'=> false, 'error'=> $error->getMessage()]);
		}
    }

    public function teste() {
        return "teste ok";
    }
}