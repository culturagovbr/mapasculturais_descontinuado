# Adicionando taxonomias

Para adicionar taxonomias a um tema é necessário registrar essas taxonomias e alterar ou criar um template.

Registrar nova taxonomia
---------------------------
O primeiro passo para o registro é definir sua taxonomia, isso é feito ao se construir um novo objeto da classe _\MapasCulturais\Definitions\Taxonomy_, o construtor dessa classe recebe cinco argumentos:

1. **_$id_** (int) o identificador dessa taxonomia dentro do banco de dados.
2. **_$slug_** (string) o nome pelo qual o sistema irá se referir a taxonomia internamente.
3. **_$description_** (string) nome da taxonomia.
4. **_$restrictedTerma_** (valor padrão: false) caso sua taxonomia seja restrita, utilizar um array com as opções possíveis, caso contrário utilize valor _booleano_ falso.
5.**_taxonomy_required_** (boolean, padrão falso) usar true quando o preenchimento é obrigatório por parte do usuário.


Após a definição da taxonomia é necessário registrá-la, o registro acontece ao usar o método _registerTaxonomy()_ dentro da classe Theme do arquivo **Theme.php** do tema, esse método recebe dois argumentos:

1.**_entity_class_** (string) o namespace da entidade que receberá a taxonomia.
2.**_$definition_** (Taxonomy) uma taxonomia.

Exemplo:

```PHP
    function register() {
        $terms = [
            'Antropologia e Etnografia',
            'Arqueologia',
            'Arquivístico',
            'Artes Visuais',
            'Ciências Naturais e História Natural',
            'Ciência e Tecnologia',
            'História',
            'Imagem e Som',
            'Virtual',
            'Outros'
        ];
        $taxo_def = new \MapasCulturais\Definitions\Taxonomy(101, 'mus_area', 'Tipologia de Acervo', $terms, false, true);
        $app->registerTaxonomy('MapasCulturais\Entities\Space', $taxo_def);
    }
```

Template
---------
Com as taxonomias registradas, criaremos um template para que sejam exibidas.

1. Crie um novo arquivo na pasta layouts/parts.
2. Defina como quer que sua taxonomia seja exibida. Como exemplo, o conteúdo do arquivo layouts/parts/widget-areas-space.php do tema [Museus](http://museus.cultura.gov.br):
```HTML
<?php
$entityClass = $entity->getClassName();
$entityName = strtolower(array_slice(explode('\\', $entityClass),-1)[0]);
$areas = array_values($app->getRegisteredTaxonomy($entityClass, 'mus_area')->restrictedTerms);
sort($areas);
?>
<div class="widget">
    <h3>Tipologia de Acervo</h3>
    <?php if($this->isEditable()): ?>
         <span class="js-editable-taxonomy" data-original-title="Tipologia de Acervo" data-emptytext="Selecione pelo menos uma tipologia" data-restrict="true"
         data-taxonomy="mus_area"><?php echo implode('; ', $entity->terms['mus_area'])?></span>
         <span style="display:none" class="js-editable-taxonomy" data-original-title="Área de Atuação" data-taxonomy="area">Museu</span>
    <?php else: ?>
        <?php foreach($areas as $i => $t): if(in_array($t, $entity->terms['mus_area'])): ?>
             <a class="tag tag-<?php echo $this->controller->id ?>" href="<?php echo $app->createUrl('site', 'search') ?>##(<?php echo $entityName ?>:(areas:!(<?php echo $i ?>)),global:(enabled:(<?php echo $entityName ?>:!t),filterEntity:<?php echo $entityName ?>))">
                 <?php echo $t ?>
             </a>
         <?php endif; endforeach; ?>
    <?php endif;?>
</div>
```

3. Definir onde quer que esse campo apareça, por exemplo alterando o arquivo **views/space/single.php** do tema **BaseV1** e adicionando a linha onde quiser que sua taxonomia apareça:

```HTML
<?php $this->part('widget-areas-space', array('entity'=>$entity)); ?>
```

Mais informações sobre como substituir ou incluir novos templates no [Guia do Desenvolvedor](mc_developer_guide.md).