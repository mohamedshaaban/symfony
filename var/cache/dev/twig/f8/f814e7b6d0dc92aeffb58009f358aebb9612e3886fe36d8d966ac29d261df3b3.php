<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_1efe6ae206c3ae3e49a507d1d9586fdac1ffb022b45c2c8f04fbdcd50629a7db extends Twig_Template
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
        $__internal_a2685d8e524ccf08d52b79496b72dc7a0251cfc019fc6055bacd76d114692e90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2685d8e524ccf08d52b79496b72dc7a0251cfc019fc6055bacd76d114692e90->enter($__internal_a2685d8e524ccf08d52b79496b72dc7a0251cfc019fc6055bacd76d114692e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_db9117155d7c7b8e91c4ce090973898e75fce355428bda05587d1b9c1386861d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db9117155d7c7b8e91c4ce090973898e75fce355428bda05587d1b9c1386861d->enter($__internal_db9117155d7c7b8e91c4ce090973898e75fce355428bda05587d1b9c1386861d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a2685d8e524ccf08d52b79496b72dc7a0251cfc019fc6055bacd76d114692e90->leave($__internal_a2685d8e524ccf08d52b79496b72dc7a0251cfc019fc6055bacd76d114692e90_prof);

        
        $__internal_db9117155d7c7b8e91c4ce090973898e75fce355428bda05587d1b9c1386861d->leave($__internal_db9117155d7c7b8e91c4ce090973898e75fce355428bda05587d1b9c1386861d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
