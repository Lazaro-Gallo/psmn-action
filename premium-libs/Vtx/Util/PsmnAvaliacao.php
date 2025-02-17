<?php

class Vtx_Util_PsmnAvaliacao
{
    public static function BlocosAvaliacao($idBloco = null)
    {
        $blocos = array(
            1 => 'Criação do Negócio',
            2 => 'Desenvolvimento (Condução) do Negócio',
            3 => 'Resultados'
        );
        return $idBloco? $blocos[$idBloco] : $blocos;
    }

    public static function statusReport($statusId = null)
    {
        $status = array(
            'N' => 'Não iniciada',
            'I' => 'Iniciada/Incompleta',
            'C' => 'Completa/Enviada',
            'D' => 'Devolvida'
        );
        return $statusId? $status[$statusId] : $status;
    }

    public static function CriteriosAvaliacao($idBloco, $idCriterio = null)
    {
        $criterios[1] = array(
            1 => 'Pensamento Sistêmico',
            2 => 'Cultura da Inovação',
        );
        $criterios[2] = array(
            1 => 'Liderança e Constância de Propósitos',
            2 => 'Orientação por Processos e Informações',
            3 => 'Valorização das Pessoas',
            4 => 'Conhecimento sobre o Cliente e o Mercado',
            5 => 'Responsabilidade Social',
            6 => 'Desenvolvimento de Parcerias'
        );
        $criterios[3] = array(
            1 => 'Visão de Futuro',
            2 => 'Aprendizado Organizacional',
            3 => 'Geração de Valor'
        );
        return $idCriterio? $criterios[$idBloco][$idCriterio] : $criterios[$idBloco];
    }

    public static function CriteriosInfo($idBloco, $idCriterio = null)
    {
        $criterios[1] = array(
            0 => 'A empreendedora deve perceber, no momento certo, as condições propícias para a realização de um bom negócio. Tem que saber aproveitar as oportunidades que o mercado oferece, por meio de idéias originais e criativas. Nesse momento, para a organização do sonhado empreendimento, faz-se necessária a visão das inter relações dos diversos aspectos que irão compor o universo desse negócio, como o ambiente que o envolve e os clientes que se beneficiarão dos seus produtos, entre tantos outros aspectos.'
                . "\nConsiderando esses fatores o Critério 1 será avaliado por meio dos itens (questões) para os sub-critérios: PENSAMENTO SISTÊMICO e CULTURA DA INOVAÇÃO.",
            1 => 'O negócio da empreendedora deve ser visto e entendido como um todo (considerando seus aspectos internos e interfaces com o ambiente externo). O pensamento sistêmico busca o entendimento da interdependência entre os diversos componentes que abrangem o empreendimento.',
            2 => 'A criatividade da ação empreendedora envolve novidade, surpresa, originalidade, visão da vida, busca de saídas e gestão de resultados. Quem desenvolve e cultiva a criatividade empreendedora está procurando o sucesso do empreendimento. A empreendedora criativa está oferecendo soluções para seus clientes. A criatividade é a capacidade que o ser humano tem de fazer diferente e de ver as coisas com outro ponto de vista. Conseguir novas idéias para lançar um produto, implementar um processo, criar uma nova maneira de relacionamento com o cliente.'
                . "\nEste sub-critério examina como a Mulher Empreendedora utiliza-se do impulso criativo e a geração de idéias na materialização da sua visão, objetivos do empreendimento e atividades do dia-a-dia. Examina como a empreendedora utiliza a criatividade, a inovação e transformação de processos para encontrar respostas simples e solucionar problemas entendidos muitas vezes como complexos. Como a empreendedora lida com a diversidade, foge de regras, e inova trazendo resultados práticos ao empreendimento. Examina como a empreendedora concebe soluções inovadoras para tornar os produtos e/ou serviços competitivos. Como as empreendedoras são estimuladas a trabalhar a criatividade em atividades diárias. A criatividade pode ser focalizada na solução de problemas e na percepção de oportunidades, o que resulta em grande proveito para uma iniciativa empreendedora.",
        );
        $criterios[2] = array(
            0 => "Não basta a Mulher ter as características necessárias para o bom empreendedorismo, ou planejar adequadamente as ações para o seu Negócio. É preciso, em seguida, que a Mulher crie as ações necessárias para que seus objetivos sejam alcançados e que essas ações sejam administradas a partir da gestão das pessoas que estarão contribuindo com a Mulher, no alcance desses objetivos. É necessário também que seja estruturada a forma como essas ações serão desenvolvidas (quem faz, quando faz e como faz – normas para funcionamento e/ou fluxos)."
                . "\nO empreendedorismo pressupõe também que a Mulher deve se voltar para o ambiente externo do seu Negócio, pois a existência deste só faz sentido se estiver suprimindo as necessidades desse ambiente, representado aqui pelos clientes, pelo mercado e pela sociedade. São essas necessidades que deverão pautar o planejamento das ações que deverão ser desenvolvidas pela Mulher de Negócios. E esse desenvolvimento deve garantir o princípio do Desenvolvimento Sustentável, ou seja, fazer bem hoje, pensando que essas ações não irão ferir o meio ambiente e a sociedade no futuro."
                . "\nConsiderando essas premissas o Critério 2 será avaliado por meio dos itens (questões) para os sub-critérios: LIDERANÇA E CONST NCIA DE PROPÓSITOS, ORIENTAÇÃO POR PROCESSOS E INFORMAÇÕES, VALORIZAÇÃO DAS PESSOAS, CONHECIMENTO SOBRE O CLIENTE E O MERCADO, DESENVOLVIMENTO DE PARCERIAS e RESPONSABILIDADE SOCIAL.",
            1 => 'Compreende a forma como a empreendedora toma suas decisões e como interage com as partes interessadas no seu negócio. Parte interessada pode ser um indivíduo ou grupo de indivíduos com interesse comum no desempenho do negócio da mulher empreendedora e no ambiente em que esta opera. São normalmente os clientes, os colaboradores, os fornecedores e a sociedade. A quantidade e a denominação das partes interessadas podem variar em função do perfil do negócio da mulher empreendedora.'
                . 'O sub-critério está relacionado, ainda, com a maneira como a Mulher mobiliza seus colaboradores para conseguir seus objetivos, uma vez que a liderança será entendida aqui como o processo por meio do qual a mulher influencia outras pessoas, homens e mulheres, a alcançarem as metas desejadas. As características de personalidade de uma empreendedora podem interferir neste processo, principalmente os seus comportamentos persistentes.',
            2 => 'A mulher empreendedora o é, também, pela compreensão que tem de como as atividades de seu negócio devem ser desenvolvidas e controladas. Após o planejamento de seu negócio, a mulher empreendedora deve criar os mecanismos necessários que irão gerar as atividades e os controles que darão conta das ações planejadas. Esses mecanismos se referem também aos processos que levarão uma ação planejada, a uma atividade (muitas vezes rotineira) para a obtenção dos resultados desejados. A tomada de decisões, que levará à definição desses processos, deve ter como base a avaliação de desempenho a partir de fatores intra e extra negócio, o que somente será possível com o uso de informações seguras que devem estar disponibilizadas no momento dessa tomada de decisões.',
            3 => 'O sucesso de um negócio depende cada vez mais do conhecimento, habilidade, criatividade e motivação das pessoas que nele trabalham. E o sucesso das pessoas depende cada vez mais das oportunidades que estas têm para aprender e de um ambiente favorável ao pleno desenvolvimento de suas potencialidades. Considerando estes aspectos, a mulher empreendedora estabelece relacionamentos com os seus colaboradores, criando as condições para o seu crescimento profissional e humano, maximizando ainda seu desempenho por meio do seu comprometimento com o negócio e o seu desenvolvimento.',
            4 => 'O cliente do empreendimento da Mulher é o destinatário dos produtos do seu negócio. Pode ser uma pessoa física ou jurídica. É quem adquire (comprador) ou quem utiliza o produto (usuário/consumidor). Além do seu cliente alvo, a mulher empreendedora deve identificar seu cliente potencial, ou seja, aquele que ainda não é seu cliente, que pode ser um cliente do negócio concorrente ou alguém que ainda não está sendo atendido nesta área de atuação, mas que poderia ser atendido pelo negócio da mulher empreendedora. Essa busca pelo cliente potencial inevitavelmente leva a mulher empreendedora a buscar também mais informações sobre o mercado. Conhecendo seu mercado de atuação e seus clientes a mulher empreendedora trabalha a imagem de seu negócio, de forma positiva, divulgando e informando para esses clientes as informações necessárias para que tenham a segurança de que o negócio dessa Mulher irá atender às suas necessidades e que há um diferencial neste empreendimento que o levará à satisfação de suas expectativas.',
            5 => 'A diversidade e responsabilidade social do empreendimento têm por objetivo a verificação da adoção de iniciativas, atividades e medidas que reconheçam e promovam a diferença entre pessoas ou grupos. São dimensões baseadas nos valores da cidadania e na estratégia do empreendimento. A valorização da diversidade é o respeito às diferenças, o exercício da tolerância, do diálogo, das construções coletivas, o cuidado com a vida e o bem comum. Com este enfoque, a mulher empreendedora atua e estimula os comportamentos éticos e transparentes, considerando, na definição e avaliação de suas atividades, o desenvolvimento sustentável da sociedade, a preservação dos recursos ambientais e culturais, e, acima de tudo, a promoção da redução das desigualdades sociais.',
            6 => 'No mundo atual, cada vez mais se faz necessário que as pessoas se associem e desenvolvam parcerias para o sucesso dos pequenos e dos grandes negócios. Da mesma forma em que está se vivendo uma mudança de paradigma em relação ao compartilhamento das informações (hoje, principalmente com a globalização, o sucesso do negócio está muitas vezes associado ao compartilhamento das informações e não à detenção das mesmas, como se imaginava há poucos anos atrás), as parcerias vêm cada vez mais, impulsionando os diversos negócios ao sucesso, possibilitando, inclusive, a solução de problemas comuns e de difícil solução quando tratadas isoladamente.'
                . "\nTendo consciência desta discussão, a mulher empreendedora deve desenvolver atividades relacionadas ao seu negócio em conjunto com outras organizações (parceria), de forma que ambas obtenham benefícios. Como resultado dessa parceria a mulher empreendedora alcançará pelo conjunto, muito mais do alcançariam, ambas as parceiras, somando seus resultados individuais."
        );
        $criterios[3] = array(
            0 => 'A aceitação de riscos e resultados parte do talento da empreendedora em acreditar que sua realização depende de si mesma e não de forças externas sobre as quais não tem controle. Ela se vê como capaz de controlar a si mesmo e de influenciar o meio de tal modo que possa atingir seus objetivos. Aceita o risco, ainda que muitas vezes seja cautelosa e precavida, sem temor do fracasso e da rejeição. E com isso alcança resultados consistentes, assegurando a perenidade de seu negócio. A partir dessas considerações o Critério 3 será avaliado por meio dos itens (questões) para os sub-critérios: VISÃO DE FUTURO, APRENDIZADO ORGANIZACIONAL e GERAÇÃO DE VALOR.',
            1 => 'A visão de futuro está relacionada ao estado que a Mulher deseja atingir no futuro com o seu negócio. Deve encaminhar a empreendedora para resultados, antecipando mudanças, aproveitando oportunidades e fazendo as correções de rumo em longo prazo.',
            2 => 'O Aprendizado Organizacional está relacionado com a busca da mulher empreendedora em alcançar um novo patamar para o seu Negócio. Suas atitudes e crenças levam a Mulher a criar, adquirir, compartilhar e utilizar conhecimentos, a fim de auxiliar na geração desse novo patamar. Faz parte das atitudes da empreendedora a iniciativa, a autoconfiança, a decisão e responsabilidade, a energia, o entusiasmo e o otimismo, utilizando dessas características para pensar e controlar o seu Negócio. Essas percepções, reflexões e avaliações de forma compartilhada, para a troca de experiências e a assimilação do que pode efetivamente representar a melhoria do empreendimento, levarão a mulher empreendedora ao Aprendizado Organizacional.',
            3 => 'Os resultados do empreendimento podem e devem ser medidos para que se evidencie o valor agregado pelo Negócio às suas diversas partes interessadas, justificando assim a existência e continuidade desse Negócio.'
        );
        return $idCriterio!==null? $criterios[$idBloco][$idCriterio] : $criterios[$idBloco];
    }

}
