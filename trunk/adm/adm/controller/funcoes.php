<?php


/**
 * funcoes
 * 
 * @package   
 * @author 
 * @copyright erick
 * @version 2012
 * @access public
 */
class funcoes {
    
    /**
     * funcoes::ConvertDateForBD()
     * Converter a Data do sistema(brasileira [09/09/2000]) para a data do Banco de Dados (internacional[2000/09/09])
     * @param mixed $data
     * @return
     */
    public static function  ConvertDateForBD ($data){
      
        $data = str_replace('/','',$data);
        $data = substr($data,4,4).substr($data,2,2).substr($data,0,2);
        return $data;
    }
    
    /**
     * funcoes::ConvertDateBD()
     * Converter a data do Banco de Dados (internacional[2000/09/09]) para a Data do sistema (brasileira [09/09/2000])
     * @param mixed $data
     * @return
     */
    public static function ConvertDateBD ($data){
       
        $data = substr($data,8,2).substr($data,5,2).substr($data,0,4);
        return $data;
    }
    
    /**
     * funcoes::DecorarData()
     * 
     * @param mixed $data
     * @return
     */
    public static function DecorarData($data){
        $data = substr($data,0,2).'/'.substr($data,2,2).'/'.substr($data,4,4);
        return $data;
        
    }
    
    
    /**
     * tabela()
     * 
     * @param mixed $resultado
     * @param integer $campo1
     * @param integer $campo2
     * @param string $titulocol1
     * @param string $titulocol2
     * @return
     *
     * Construção da tabela de informações campo obrigatorio 'resultado' que é um resource . Podendo haver alterações da tabela
     * conforme o necesario em relação a duas primeiras colunas, podendo mudar sua informação. Titulocol1 e titulocol2 seria o titulo
     * das colunas e campo1 e campo2 o valor em interio da coluna no Banco de dados referente a informação
     */
    public static function tabela($resultado,$campo1 = 0,$campo2 = 1, $titulocol1 = 'ID', $titulocol2 = "Nome"){
         $campo1 =  (int)$campo1;     
         $campo2 =  (int)$campo2;
         $tabela = '<table id="tabela">
                        <tr>
                        	<th>'.$titulocol1.'</th>
                        	<th>'.$titulocol2.'</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>';
                        while ($fun = mysql_fetch_array($resultado)){
                            $tabela = $tabela . '                        
                            <tr>
                            	<td>';
                                
                                if ($titulocol1 == 'Data'){
                                    $campo = funcoes::DecorarData( funcoes::ConvertDateBD(substr($fun[$campo1],0,10)));
                                    }
                                 else{$campo = $fun[$campo1];};
                                 
                                 $tabela = $tabela . $campo.'</td>
                            	<td>'.$fun[$campo2].'</td>
                            	<td><center><a href="#"  class="editar" id="'.$fun[0].'"><img src="images/edit.png" alt="" /></a></center></td>
                            	<td><center><a href="#" class="excluir" id="'.$fun[0].'"><img src="images/excluir.png" alt="" /></a></center></td>
                            </tr>';
                            
                        }
                        
                        $tabela = $tabela .'
                    </table>';
            echo $tabela; 
    }
    public static function tabela64($resultado,$campo1 = 0,$campo2 = 1, $titulocol1 = 'ID', $titulocol2 = "Nome"){
         $campo1 =  (int)$campo1;     
         $campo2 =  (int)$campo2;
         $tabela = '<table id="tabela">
                        <tr>
                        	<th>'.$titulocol1.'</th>
                        	<th>'.$titulocol2.'</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>';
                        while ($fun = mysql_fetch_array($resultado)){
                            $tabela = $tabela . '                        
                            <tr>
                            	<td>';
                                
                                if ($titulocol1 == 'Data'){
                                    $campo = funcoes::DecorarData( funcoes::ConvertDateBD(substr($fun[$campo1],0,10)));
                                    }
                                 else{$campo = $fun[$campo1];};
                                 
                                 $tabela = $tabela . $campo.'</td>
                            	<td>'.stripslashes(base64_decode($fun['titulo'])).'</td>
                            	<td><center><a href="#"  class="editar" id="'.$fun[0].'"><img src="images/edit.png" alt="" /></a></center></td>
                            	<td><center><a href="#" class="excluir" id="'.$fun[0].'"><img src="images/excluir.png" alt="" /></a></center></td>
                            </tr>';
                            
                        }
                        
                        $tabela = $tabela .'
                    </table>';
            echo $tabela; 
    }
     public static function tabela64Titulo($resultado,$campo1 = 0,$campo2 = 1, $titulocol1 = 'ID', $titulocol2 = "Nome",$cont){
         $campo1 =  (int)$campo1;     
         $campo2 =  (int)$campo2;
         $tabela = '<table id="tabela">
                        <tr>
                        	<th>'.$titulocol1.'</th>
                        	<th>'.$titulocol2.'</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>';
                        while ($fun = mysql_fetch_array($resultado)){
                            if($cont != ''){
                                if ( substr_count(strtolower(base64_decode($fun['titulo'])),strtolower($cont)) > 0 ){
                              
                                $tabela = $tabela . '                        
                                <tr>
                                	<td>';
                                    
                                    if ($titulocol1 == 'Data'){
                                        $campo = funcoes::DecorarData( funcoes::ConvertDateBD(substr($fun[$campo1],0,10)));
                                        }
                                     else{$campo = $fun[$campo1];};
                                     
                                     $tabela = $tabela . $campo.'</td>
                                	<td>'.stripslashes(base64_decode($fun['titulo'])).'</td>
                                	<td><center><a href="#"  class="editar" id="'.$fun[0].'"><img src="images/edit.png" alt="" /></a></center></td>
                                	<td><center><a href="#" class="excluir" id="'.$fun[0].'"><img src="images/excluir.png" alt="" /></a></center></td>
                                </tr>';
                                }}
                        }
                        
                        $tabela = $tabela .'
                    </table>';
            echo $tabela; 
    }

}

?>