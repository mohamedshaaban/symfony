<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6cd5c1cdad47be252dd00d702e36fda2db57281a3e4415fc3bf1837d17c43b5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f27073b0b7ac16a91b6be3162dc58a93c0986516f9e514886cab8b9988b80e17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f27073b0b7ac16a91b6be3162dc58a93c0986516f9e514886cab8b9988b80e17->enter($__internal_f27073b0b7ac16a91b6be3162dc58a93c0986516f9e514886cab8b9988b80e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_93bc7feb866134f328d5029f789e0f0bd3a5f0d24bba90fad6900cf9b1451d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93bc7feb866134f328d5029f789e0f0bd3a5f0d24bba90fad6900cf9b1451d62->enter($__internal_93bc7feb866134f328d5029f789e0f0bd3a5f0d24bba90fad6900cf9b1451d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f27073b0b7ac16a91b6be3162dc58a93c0986516f9e514886cab8b9988b80e17->leave($__internal_f27073b0b7ac16a91b6be3162dc58a93c0986516f9e514886cab8b9988b80e17_prof);

        
        $__internal_93bc7feb866134f328d5029f789e0f0bd3a5f0d24bba90fad6900cf9b1451d62->leave($__internal_93bc7feb866134f328d5029f789e0f0bd3a5f0d24bba90fad6900cf9b1451d62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
