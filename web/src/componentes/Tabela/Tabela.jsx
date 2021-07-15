import React, { useState } from 'react';
import MaterialTable/* , { MTableToolbar } *//* , { MaterialTableProps } */ from 'material-table';
import { forwardRef } from 'react';

import AddBox from '@material-ui/icons/AddBox';
import ArrowDownward from '@material-ui/icons/ArrowDownward';
import Check from '@material-ui/icons/Check';
import ChevronLeft from '@material-ui/icons/ChevronLeft';
import ChevronRight from '@material-ui/icons/ChevronRight';
import Clear from '@material-ui/icons/Clear';
import DeleteOutline from '@material-ui/icons/DeleteOutline';
import Edit from '@material-ui/icons/Edit';
import FilterList from '@material-ui/icons/FilterList';
import FirstPage from '@material-ui/icons/FirstPage';
import LastPage from '@material-ui/icons/LastPage';
import Remove from '@material-ui/icons/Remove';
import Save from '@material-ui/icons/Save';
import SaveAlt from '@material-ui/icons/SaveAlt';
import Search from '@material-ui/icons/Search';
import ViewColumn from '@material-ui/icons/ViewColumn';

import { TablePagination, /* TablePaginationProps */ } from '@material-ui/core';

import { CCol, CButton, CRow } from '@coreui/react';
import CIcon from '@coreui/icons-react'

const icones = {
    Add: forwardRef((props, ref) => <AddBox {...props} ref={ref} />),
    Check: forwardRef((props, ref) => <Check {...props} ref={ref} />),
    Clear: forwardRef((props, ref) => <Clear {...props} ref={ref} />),
    Delete: forwardRef((props, ref) => <DeleteOutline {...props} ref={ref} />),
    DetailPanel: forwardRef((props, ref) => <ChevronRight {...props} ref={ref} />),
    Edit: forwardRef((props, ref) => <Edit {...props} ref={ref} />),
    Export: forwardRef((props, ref) => <SaveAlt {...props} ref={ref} />),
    Filter: forwardRef((props, ref) => <FilterList {...props} ref={ref} />),
    FirstPage: forwardRef((props, ref) => <FirstPage {...props} ref={ref} />),
    LastPage: forwardRef((props, ref) => <LastPage {...props} ref={ref} />),
    NextPage: forwardRef((props, ref) => <ChevronRight {...props} ref={ref} />),
    PreviousPage: forwardRef((props, ref) => <ChevronLeft {...props} ref={ref} />),
    ResetSearch: forwardRef((props, ref) => <Clear {...props} ref={ref} />),
    Save: forwardRef((props, ref) => <Save {...props} ref={ref} />),
    Search: forwardRef((props, ref) => <Search {...props} ref={ref} />),
    SortArrow: forwardRef((props, ref) => <ArrowDownward {...props} ref={ref} />),
    ThirdStateCheck: forwardRef((props, ref) => <Remove {...props} ref={ref} />),
    ViewColumn: forwardRef((props, ref) => <ViewColumn {...props} ref={ref} />)
};



const Tabela = (props) => {
    const [linhasSelecionadas, mudarLinhasSelecionadas] = useState([]);

    function PatchedPagination(props, salvar) {
        const {
            ActionsComponent,
            onChangePage,
            onChangeRowsPerPage,
            ...tablePaginationProps
        } = props;
      
        return (
            <TablePagination
                {...tablePaginationProps}
                // @ts-expect-error onChangePage was renamed to onPageChange
                onPageChange={onChangePage}
                onRowsPerPageChange={onChangeRowsPerPage}
                ActionsComponent={(subprops) => {
                    const { onPageChange, ...actionsComponentProps } = subprops;
                    return (
                        // @ts-expect-error ActionsComponent is provided by material-table
                        <React.Fragment>
                        <ActionsComponent
                            {...actionsComponentProps}
                            onChangePage={onPageChange}
                        />
                        <CButton color={'primary'} style={{marginRight: '20px'}} onClick={salvar}>Salvar</CButton>
                        {/* <CIcon name="cil-save"/>,
                        <Save
                            style={{marginRight: '20px'}}
                        /> */}
                        </React.Fragment>
                    );
                }}
            />
        );
    }

    const salvar = () => {
        props.botaoSalvarAcao(linhasSelecionadas);
    }

    const {
        colunas,
        linhas,
        paginacao = false,
        selecao = false,
        titulo,
        botaoSalvar = false,
    } = props;

    return (
        <React.Fragment>
            <CRow style={{marginBottom: '25px'}}>
                <CCol className="text-right">
                    <CButton color={'primary'} onClick={salvar}>Salvar</CButton>
                </CCol>
            </CRow>
            <MaterialTable
                icons={icones}
                columns={colunas}
                data={linhas}
                title={titulo}
                components={{
                    Pagination: props => PatchedPagination(props, salvar),
                    /* Toolbar: props => (
                        <div style={{ backgroundColor: '#F00' }}>
                            <MTableToolbar {...props} />
                        </div>
                    ), */
                }}
                options={{
                    paging: paginacao,
                    pageSize: linhas.length < 5 ? linhas.length !== 0 ? 5 : 1 : 10,
                    emptyRowsWhenPaging: true,
                    pageSizeOptions: [1, 5, 10, 20, 50, 100],
                    filtering: true,
                    //showTextRowsSelected: false,
                    headerStyle: {
                        //backgroundColor: '#00F',
                        //color: '#FFF'
                    },
                    selection: selecao,
                    /* rowStyle: x => {
                        if (x.tableData.id % 2) {
                            return {backgroundColor: "#FFF"}
                        }
                    } */
                }}
                actions={botaoSalvar
                    ?
                        [
                            {
                                icon: () => <Save />,
                                tooltip: "Salvar",
                                position: "toolbarOnSelect",
                                onClick: () => {
                                    salvar();
                                }
                            },
                            {
                                icon: () => <Save />,
                                tooltip: "Salvar",
                                position: "toolbar",
                                onClick: () => {
                                    salvar();
                                }
                            }
                        ]
                    :
                        null
                }
                onRowClick={props.cliqueNaLinha}
                onSelectionChange={(linhas) => {
                    mudarLinhasSelecionadas(linhas);
                }}
                /* components={{
                    Toolbar: props => (
                        <div style={{ backgroundColor: '#F00' }}>
                            <MTableToolbar {...props} />
                        </div>
                    ),
                }} */
                localization={{
                    body: {
                        emptyDataSourceMessage: 'Sem registros',
                        filterRow: {
                            filterTooltip: 'Filtro'
                        }
                    },
                    pagination: {
                        labelRowsSelect: 'Linhas',
                        labelRowsPerPage: 'Linhas por página',
                        firstAriaLabel: 'Primeira página',
                        firstTooltip: 'Primeira página',
                        previousAriaLabel: 'Página anterior',
                        previousTooltip: 'Página anterior',
                        nextAriaLabel: 'Próxima página',
                        nextTooltip: 'Próxima página',
                        lastAriaLabel: 'Última página',
                        lastTooltip: 'Última página'
                    },
                    toolbar: {
                        searchPlaceholder: 'Procurar',
                        searchTooltip: 'Procurar',
                        nRowsSelected: '{0} linhas(s) selecionada(s)'
                    }
                }}
            />
        </React.Fragment>
    )
}

export default Tabela;
