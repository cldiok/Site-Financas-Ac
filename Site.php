<?php 
require('protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu Aliado Financeiro | Aprenda a Investir</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="StyleDoSite.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap">

</head>
<body>
    <div class="parallax">
        <div class="hero-text">
            <h1>Seu Aliado Financeiro</h1>
            <p style="color: white;">Aprenda a investir e conquiste sua liberdade financeira</p>
            <a href="#cursos" class="cta-button">Comece Agora</a>
        </div>
    </div>

    <nav>
        <ul>
            <li><strong><a href="#sobre">Sobre</a></strong></li>
            <li><strong><a href="#educacao-financeira">Educação Financeira</a></strong></li>
            <li><strong><a href="#dicas-basicas">Dicas Básicas</a></strong></li>
            <li><strong><a href="#cursos">Cursos</a></strong></li>
            <li><strong><a href="#recursos">Recursos</a></strong></li>
            <li><strong><a href="#estatisticas">Estatísticas</a></strong></li>
            <li><strong><a href="#comparacao-financeira">Comparação Financeira</a></strong></li>
            <li><strong><a href="#contato">Contato</a></strong></li>
            <li><strong><a href="logout.php " id="loginButton">Sair</a></strong></li>
        </ul>
    </nav>

    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h3>Login</h3>
            <form id="loginForm" action="cadastro_script.php" method="post">
                <input type="email" id="email" placeholder="Email" required>
                <input type="password" id="password" placeholder="Senha" required>
                <button type="submit">Entrar</button>
            </form>
            <p>Não tem uma conta? <a href="#" id="registerLink">Registre-se</a></p>
        </div>
    </div>

    <div id="sobre" class="section">
        <h3>Sobre Nós</h3>
        <p>Seu Aliado Financeiro é a plataforma ideal para quem deseja aprender a investir de forma inteligente e
            segura. Nossa missão é capacitar você com conhecimento financeiro para tomar decisões informadas e construir
            um futuro próspero.</p>
    </div>

    <div id="educacao-financeira" class="section">
        <h3>O que é Educação Financeira?</h3>
        <div class="content-wrapper">
            <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                alt="Pessoa estudando finanças com livros e calculadora" width="400" height="300">
            <p>Educação financeira é o processo de aprendizagem sobre como gerenciar seu dinheiro de forma eficiente.
                Isso inclui entender conceitos como orçamento, poupança, investimentos, e como tomar decisões
                financeiras inteligentes para alcançar seus objetivos de vida.</p>
        </div>
    </div>

    <div id="dicas-basicas" class="section">
        <h3>Dicas Básicas de Finanças Pessoais</h3>
        <div class="tips-container">
            <div class="tip-card">
                <h3>Cartão de Crédito</h3>
                <ul>
                    <li>Use com responsabilidade</li>
                    <li>Pague o valor total da fatura</li>
                    <li>Evite o rotativo</li>
                </ul>
            </div>
            <div class="tip-card">
                <h3>Metas Financeiras</h3>
                <ul>
                    <li>Estabeleça objetivos claros</li>
                    <li>Crie um plano de ação</li>
                    <li>Monitore seu progresso</li>
                </ul>
            </div>
            <div class="tip-card">
                <h3>Investimentos</h3>
                <ul>
                    <li>Diversifique sua carteira</li>
                    <li>Invista regularmente</li>
                    <li>Pense no longo prazo</li>
                </ul>
            </div>
            <div class="tip-card">
                <h3>Orçamento</h3>
                <ul>
                    <li>Registre suas despesas e receitas</li>
                    <li>Defina um limite de gastos mensais</li>
                    <li>Reavalie seu orçamento regularmente</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="cursos" class="section">
        <h3>Nossos Cursos</h3>
        <div class="courses">
            <div class="course-card">
                <h3>Investimentos Básicos</h3>
                <p>Aprenda os fundamentos dos investimentos e dê os primeiros passos no mundo financeiro.</p>
                <a href="cursos/investimentos-basicos.html" class="cta-button">Saiba Mais</a>
            </div>
            <div class="course-card">
                <h3>Análise Técnica</h3>
                <p>Domine as técnicas de análise gráfica para tomar melhores decisões de investimento.</p>
                <a href="cursos/analise-tecnica.html" class="cta-button">Saiba Mais</a>
            </div>
            <div class="course-card">
                <h3>Gestão de Risco</h3>
                <p>Aprenda a proteger seu patrimônio e otimizar seus investimentos com estratégias de gestão de risco.</p>
                <a href="cursos/gestao-de-risco.html" class="cta-button">Saiba Mais</a>
            </div>
        </div>
    </div>

    <div id="recursos" class="section">
        <h3>Recursos Gratuitos</h3>
        <p>Acesse nosso blog e e-books gratuitos para começar sua jornada de aprendizado financeiro:</p>
        <ul>
            <li><a href="cursos/recursos/introduçao.html">Introdução aos Investimentos</a></li>
            <li><a href="cursos/recursos/tipos.html">Tipos de Investimentos Explicados</a></li>
            <li><a href="cursos/recursos/books.html">E-book: Guia do Iniciante na Bolsa de Valores</a></li>
        </ul>
    </div>

    <div id="estatisticas" class="section">
        <h3>Estatísticas de Investimentos</h3>
        <div class="chart-container">
            <canvas id="investmentChart"></canvas>
        </div>
        <div class="chart-container">
            <canvas id="riskReturnChart"></canvas>
        </div>
    </div>

    <div id="comparacao-financeira" class="section">
        <h3>Situação Financeira: Brasil vs Outros Países</h3>
        <div class="chart-container">
            <canvas id="financialSituationChart"></canvas>
        </div>
    </div>

    <div id="contato" class="section">
        <h3>Entre em Contato</h3>
        <p>Tem alguma dúvida? Entre em contato conosco:</p>
        <p>Email: Gabriel.butignoni@cs.ceunsp.edu.br</p>
        <p>Telefone: (11) 93097-1560</p>
    </div>
    <footer>
        <p>&copy; 2024 Seu Aliado Financeiro. Todos os direitos reservados.</p>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const navLinks = document.querySelectorAll('nav a');
            const sections = document.querySelectorAll('.section');
            const parallax = document.querySelector('.parallax');

            function isInViewport(element) {
                const rect = element.getBoundingClientRect();
                return (
                    rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.bottom >= 0
                );
            }

            function animateSections() {
                sections.forEach(section => {
                    if (isInViewport(section)) {
                        section.classList.add('visible');
                    }
                });
            }

            function parallaxEffect() {
                const scrolled = window.pageYOffset;
                parallax.style.backgroundPositionY = -(scrolled * 0.5) + 'px';
                parallax.style.filter = `brightness(${100 - scrolled * 0.05}%)`;
            }

            function animateTipCards() {
                const tipCards = document.querySelectorAll('.tip-card');
                tipCards.forEach((card, index) => {
                    if (isInViewport(card)) {
                        card.style.animationPlayState = 'running';
                    }
                });
            }

            window.addEventListener('scroll', () => {
                animateSections();
                parallaxEffect();
                animateTipCards();
            });
            animateSections();

            // Smooth scrolling for navigation links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            const ctaButtons = document.querySelectorAll('.cta-button');
            ctaButtons.forEach(button => {
                button.addEventListener('click', function (e) {
                    if (this.getAttribute('href').startsWith('/')) {
                        e.preventDefault();
                        alert('Redirecionando para: ' + this.getAttribute('href'));
                    }
                });
            });

            const loginButton = document.getElementById('loginButton');
            const loginModal = document.getElementById('loginModal');
            const closeModal = loginModal.querySelector('.close');
            const loginForm = document.getElementById('loginForm');

            loginButton.addEventListener('click', () => {
                loginModal.style.display = 'block';
            });

            closeModal.addEventListener('click', () => {
                loginModal.style.display = 'none';
            });

            window.addEventListener('click', (event) => {
                if (event.target === loginModal) {
                    loginModal.style.display = 'none';
                }
            });

            loginForm.addEventListener('submit', (e) => {
                e.preventDefault();
                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;
                console.log('Login attempt:', email, password);
                window.location.href = '/dashboard.html';
            });

            // Gráfico de Investimentos
            const investmentCtx = document.getElementById('investmentChart').getContext('2d');
            new Chart(investmentCtx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun'],
                    datasets: [{
                        label: 'Retorno do Investimento',
                        data: [1000, 1200, 1150, 1300, 1400, 1600],
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        title: {
                            display: true,
                            text: 'Crescimento do Investimento ao Longo do Tempo'
                        }
                    }
                }
            });

            // Gráfico de Risco vs Retorno
            const riskReturnCtx = document.getElementById('riskReturnChart').getContext('2d');
            new Chart(riskReturnCtx, {
                type: 'scatter',
                data: {
                    datasets: [{
                        label: 'Risco vs Retorno',
                        data: [
                            { x: 2, y: 4 },
                            { x: 3, y: 6 },
                            { x: 4, y: 5 },
                            { x: 5, y: 7 },
                            { x: 6, y: 8 }
                        ],
                        backgroundColor: 'rgb(255, 99, 132)'
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        title: {
                            display: true,
                            text: 'Relação entre Risco e Retorno'
                        }
                    },
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: 'Risco'
                            }
                        },
                        y: {
                            title: {
                                display: true,
                                text: 'Retorno'
                            }
                        }
                    }
                }
            });

            // Gráfico Comparando Situação Financeira
            const financialSituationCtx = document.getElementById('financialSituationChart').getContext('2d');
            new Chart(financialSituationCtx, {
                type: 'bar',
                data: {
                    labels: ['Brasil', 'EUA', 'Alemanha', 'Japão', 'China'],
                    datasets: [{
                        label: 'Índice de Educação Financeira',
                        data: [60, 85, 80, 78, 75],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.7)',
                            'rgba(54, 162, 235, 0.7)',
                            'rgba(255, 206, 86, 0.7)',
                            'rgba(75, 192, 192, 0.7)',
                            'rgba(153, 102, 255, 0.7)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        title: {
                            display: true,
                            text: 'Comparação da Situação Financeira'
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100,
                            title: {
                                display: true,
                                text: 'Índice (0-100)'
                            }
                        }
                    }
                }
            });
        });
    </script>
</body>

</html>