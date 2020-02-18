<nav class="sidebar">
    <ul class="list-unstyled">
        <li><?= $this->Html->link(
                '<i class="far fa-chart-bar"></i> Estatisticas', 
                [
                    'controller' => 'Estatisticas', 
                    'action' => 'index' 
                ],
                [
                    'escape' => false
                ]
            
            );?>
        </li>
        <li><?= $this->Html->link(
                '<i class="fab fa-audible"></i> Ocorrencias', 
                [
                    'controller' => 'Ocorrencias', 
                    'action' => 'index' 
                ],
                [
                    'escape' => false
                ]
            
            );?>
        </li>
        <li><?= $this->Html->link(
                '<i class="fas fa-users"></i> Servidores', 
                [
                    'controller' => 'Users', 
                    'action' => 'index' 
                ],
                [
                    'escape' => false
                ]
            
            );?>
        </li>
        <li><?= $this->Html->link(
                '<i class="fas fa-user"></i> Alunos', 
                [
                    'controller' => 'Alunos', 
                    'action' => 'index' 
                ],
                [
                    'escape' => false
                ]
            
            );?>
        </li>
        <li><?= $this->Html->link(
                '<i class="fas fa-book"></i> Cursos', 
                [
                    'controller' => 'Cursos', 
                    'action' => 'index' 
                ],
                [
                    'escape' => false
                ]
            
            );?>
        </li>
        <li><?= $this->Html->link(
                '<i class="fas fa-clock"></i> Turnos', 
                [
                    'controller' => 'Turnos', 
                    'action' => 'index' 
                ],
                [
                    'escape' => false
                ]
            
            );?>
        </li>
        <li><?= $this->Html->link(
                '<i class="fas fa-check"></i> Medidas', 
                [
                    'controller' => 'Medidas', 
                    'action' => 'index' 
                ],
                [
                    'escape' => false
                ]
            
            );?>
        </li>
        <li><?= $this->Html->link(
                '<i class="fas fa-check"></i> Tipos de ocorrencias', 
                [
                    'controller' => 'TipoOcorrencias', 
                    'action' => 'index' 
                ],
                [
                    'escape' => false
                ]
            
            );?>
        </li>
        <li><?= $this->Html->link(
                '<i class="fas fa-sign-out-alt"></i> Sair', 
                [
                    'controller' => 'Users', 
                    'action' => 'logout' 
                ],
                [
                    'escape' => false
                ]
            
            );?>
        </li>
    </ul>
</nav>