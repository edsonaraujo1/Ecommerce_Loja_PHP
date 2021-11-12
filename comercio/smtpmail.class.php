<?
/*
 ----------------------------------------------------
 Desenvolvido por...: Edson de Araujo
 Autor da classe....: Bruno Pitteli Gonçalves <scorninpc<at>gmail<dot>com>
 Finalidade.........: Manipulador de Servidor SMPT
 Criado em Data.....: 07/12/2007
 Ultima Atualização : 07/04/2009 

 DEUS SEJA LOUVADO
 ----------------------------------------------------
*/

    /**
     * 
     * Redistribution and use in source and binary forms, with or without
     * modification, are permitted provided that the following conditions are met:
     *
     *     * Redistributions of source code must retain the above copyright
     *       notice, this list of conditions and the following disclaimer.
     *     * Redistributions in binary form must reproduce the above copyright
     *       notice, this list of conditions and the following disclaimer in the
     *       documentation and/or other materials provided with the distribution.
     *     * Neither the name of the University of California, Berkeley nor the
     *       names of its contributors may be used to endorse or promote products
     *       derived from this software without specific prior written permission.
     *
     * THIS SOFTWARE IS PROVIDED BY THE REGENTS AND CONTRIBUTORS "AS IS" AND ANY
     * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
     * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
     * DISCLAIMED. IN NO EVENT SHALL THE REGENTS AND CONTRIBUTORS BE LIABLE FOR ANY
     * DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
     * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
     * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
     * ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
     * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
     * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
     * 
     * 
     * Classe de manipulação do protocolo SMTP
     * @author Bruno Pitteli Gonçalves <scorninpc<at>gmail<dot>com>
     * @version 0.2
     * @license BSD license
     *
     * 0.1
     *        Classe inicial
     *
     * 0.2
     *        Possibilidade de envio de email HTML
     *
     * 0.3
     *        Suporte a varios TOs separados por;
     *
     * 0.4
     *        Suporte à mudança da codificação
     *
     */

    // Seta o tempo limite para 60 segundos
    set_time_limit(120);
    
    /**
     * SMTPMAIL
     * Escrito por Bruno Pitteli Gonçalves <scorninpc()gmail*com>
     * Classe que trata o protocolo SMTP
     */
    class SMTPMAIL {
        /**
         *    Variavel que armazena o endereço do servidor de email
         *    @access public
         */
        public $Servidor;
        
        /**
         *    Variavel que armazena a porta do servidor de email
         *    @access public
         */
        public $Porta = 25;
        
        /**
         *    Variavel que armazena a codificação
         *    @access public
         */
        public $Codificacao = 'ISO-8859-1';
        
        /**
         *    Variavel que armazena se o servidor é autenticado
         *    @access public
         */
        public $Autenticado;
        
        /**
         *    Variavel que armazena o usuario do servidor de email, caso autenticado
         *    @access public
         */
        public $Usuario;
        
        /**
         *    Variavel que armazena a senha do usuario do servidor de email, caso autenticado
         *    @access public
         */
        public $Senha;
        
        /**
         *    Variavel que armazena o email de quem está enviando
         *    @access public
         */
        public $EmailDe;
        
        /**
         *    Variavel que armazena o nome+email de quem está enviando, para aparecer no email
         *    @access public
         */
        public $EmailDeVisual;
        
        
        /**
         *    Variavel que armazena o email para quem vai
         *    @access public
         */
        public $EmailPara;
        
        /**
         *    Variavel que armazena o nome+email de quem está enviando, para aparecer no email
         *    @access public
         */
        public $EmailParaVisual;
        
        /**
         *    Variavel que armazena o assunto do email
         *    @access public
         */
        public $Assunto;
        
        /**
         *    Variavel que armazena a senha corpo do email
         *    @access public
         */
        public $Corpo;
        
        /**
         *    Vetor que armazena os arquivos para anexo
         *    @access private
         */
        private $Anexos = array();
        
        /**
         *    Variavel que armazena a situação do envio do email
         *    @access private
         */
        private $erros = FALSE;
    
        /**
         *    Construtor da classe
         *    @name __construct
         *    @access public
         */
        public function __construct() {
        } // __construct
    
        /**
         *    Método que anexa um arquivo ao vetor
         *    @name anexarArquivo
         *    @param string $path - Caminho do arquivo
         *    @access public
         */
        public function anexarArquivo($path) {
            $this->Anexos[] = $path;
        } // anexarArquivo
        
        /**
         *    Método que verifica se a classe esta pronta está pronta para o envio de email
         *    @name verificarIntegridade
         *    @access private
         *    @return boolean
         */
        private function verificarIntegridade() {
            // Verifica as pendencias se o servidor for autenticado
            if($this->Autenticado === TRUE) {
                if((empty($this->Usuario)) || (empty($this->Senha))) {
                    $this->erros = TRUE;
                    return FALSE;
                }
            }
            
            // Verifica se o servidor foi digitado
            if(empty($this->Servidor)) {
                $this->erros = TRUE;
                return FALSE;
            }
            
            // Verifica se os outros parametros são validos
            if((empty($this->EmailDe)) || (empty($this->EmailPara)) || (empty($this->Assunto)) || (empty($this->Corpo))) {
                $this->erros = TRUE;
                return FALSE;
            }
            
            return TRUE;
        } // verificarIntegridade
    
        /**
         *    Método que espera a resposta do servidor
         *    @name esperarResposta
         *    @access private
         *    @param integer $socket - Ponteiro para o socket
         *    @param integer $response - Codigo de resposta OK
         *    @return boolean
         */
        private function esperarResposta($socket, $response) {
            while (substr($server_response, 3, 1) != ' ') {
                if (!($server_response = fgets($socket, 256))) {
                    $this->erros = TRUE;
                    return FALSE;
                }
                if (!(substr($server_response, 0, 3) == $response)) {
                    $this->erros = TRUE;
                    return FALSE;
                }
//                echo '<font color="red">S</font> <- ' . $server_response . '<br />';
            }
            return TRUE;
        } // esperarResposta
        
        /**
         *    Método que envia uma string ao servidor
         *    @name enviaPacote
         *    @access private
         *    @param integer $socket - Ponteiro para o socket
         *    @param integer $data - String contendo as informações à serem enviadas
         *    @return boolean
         */
        private function enviaPacote($socket, $data) {
            if(!fputs($socket, $data . "\r\n")) {
                return FALSE;
            }
//            echo "<font color=\"blue\">C</font> -> " . $data . "<br />";
            return TRUE;
        } // enviaResposta
    
        /**
         *    Método que envia o email
         *    @name Enviar
         *    @access prublic
         *    @return boolean
         */
        function Enviar() {            
            $boundary = md5(date('r', time()));
            
            // Verifica se esta pronto para iniciar o envio
            if(!$this->verificarIntegridade()) {
                return FALSE;
            }

            // Tenta conectar
            
        
            if(!$socket = @fsockopen($this->Servidor, $this->Porta, $errno, $errstr, 30)) {
                $this->erros = TRUE;
                return FALSE;
            }
        
            // Espera por resposta
            $this->esperarResposta($socket, "220");
        
            // Se o servidor é autenticado
            if($this->Autenticado) {
                $this->enviaPacote($socket, "EHLO " . $this->Servidor);
                $this->esperarResposta($socket, "250");
            
                $this->enviaPacote($socket, "AUTH LOGIN");
                $this->esperarResposta($socket, "334");
                
                $this->enviaPacote($socket, base64_encode($this->Usuario));
                $this->esperarResposta($socket, "334");
            
                $this->enviaPacote($socket, base64_encode($this->Senha));
                $this->esperarResposta($socket, "235");
            } else {
                $this->enviaPacote($socket, "HELO " . $this->Servidor);
                $this->esperarResposta($socket, "250");
            }
            
            // Envia quem está mandando o email
            $this->enviaPacote($socket, "MAIL FROM: " . $this->EmailDe);
            $this->esperarResposta($socket, "250");
            
            // Envia quem esta recebendo o email
            $Emails = explode(';', $this->EmailPara);
            for($i=0;$i<count($Emails);$i++) {
                $this->enviaPacote($socket, "RCPT TO: " . $Emails[$i]);
                $this->esperarResposta($socket, "250");
            }
            
            // Diz ao servidor que estou pronto para enviar a mensagem
            $this->enviaPacote($socket, "DATA");
            $this->esperarResposta($socket, "354");

            // Cabeçalho do email
            if(strlen($this->EmailDeVisual) == 0) {
                $this->enviaPacote($socket, "From: " . $this->EmailDe);
            } else {
                $this->enviaPacote($socket, "From: " .  $this->EmailDeVisual . " <" .  $this->EmailDe . ">");
            }
            
            $To = 'To: ';
            $Emails = explode(';', $this->EmailPara);
            for($i=0; $i<count($Emails); $i++) {
                if(empty($Emails[$i])) {
                    continue;
                }
                $To .= $Emails[$i] . ', ';
            }

            $To = substr($To, 0, strrpos($To, ','));

            $this->enviaPacote($socket, $To);
            
            // Mando o assunto do email
            $this->enviaPacote($socket, "Subject: " . $this->Assunto);
            
            // Envia o cabeçalho
            $this->enviaPacote($socket, "Date: " . date("d M y H:i:s"));
            $this->enviaPacote($socket, "MIME-Version: 1.0");
            $this->enviaPacote($socket, "Content-Type: multipart/mixed; boundary=" . $boundary);
            $this->enviaPacote($socket, "--" . $boundary);
            $this->enviaPacote($socket, "Content-Type: text/html; charset=" . $this->Codificacao . "\r\n");
            $this->enviaPacote($socket, $this->Corpo);
            $this->enviaPacote($socket, "\r\n");
        
            // Verifica se existe arquivo para ser enviado junto
            if(count($this->Anexos) > 0) {
                for($i=0; $i<count($this->Anexos); $i++) {
                    $info = pathinfo($this->Anexos[$i]);

                    // Pega o tipo para o MIME TYPE
                    strtolower($info['extension']);
                    switch($tipo) {
                        case "jpeg":
                        case "jpg":
                            $Tipo = "image/jpeg";
                        break;
                        case "gif":
                            $Tipo = "image/gif";
                        break;
                        case "doc":
                            $Tipo = "application/msword";
                        break;
                        case "rar":
                            $Tipo = "application/rar";
                        break;
                        case "zip":
                            $Tipo = "application/zip";
                        break;
                        case "pdf":
                            $Tipo = "application/pdf";
                        break;
                        default:
                            $Tipo = "application/octet-stream";
                        break;
                    }
                    
                    // Envia os cabeçalhos do anexo
                    $this->enviaPacote($socket, "--" . $boundary);
                    $this->enviaPacote($socket, "Content-Type: " . $Tipo . "; name=\"". $info['filename'] . "\"");
                    $this->enviaPacote($socket, "Content-Transfer-Encoding: base64");
                    $this->enviaPacote($socket, "Content-Disposition: attachment; filename=\"" . $info['filename'] . "\"");
                    $this->enviaPacote($socket, "\r\n");
                
                    // Envia o arquivo codificado
                    $this->enviaPacote($socket, base64_encode(file_get_contents($this->Anexos[$i])));
                    $this->enviaPacote($socket, "\r\n");
                }
                $this->enviaPacote($socket, "--" . $boundary . "--");
            }
            
            // Avisa o o termino do envio
            $this->enviaPacote($socket, "\r\n\r\n.");
            $this->esperarResposta($socket, "250");
            
            // Sai do servidor e fecha o socket
            $this->enviaPacote($socket, "QUIT");
            fclose($socket);
        
            // Retorna FALSE se o email não foi enviado
            if($this->erros == TRUE) {
                return FALSE;
    
            // Ou TRUE se não houve erro
            } else {
                return TRUE;
            }
        } // Enviar
    }
?>
