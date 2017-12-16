<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e8f32558277e01c3241b08b4390447ad1c53b2fbcbfa7ebb578f5030b951f176 extends Twig_Template
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
        $__internal_40657335988fd3e98a60e3657c0b58f10b137bf1d8aaad005d7400f7ad261985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40657335988fd3e98a60e3657c0b58f10b137bf1d8aaad005d7400f7ad261985->enter($__internal_40657335988fd3e98a60e3657c0b58f10b137bf1d8aaad005d7400f7ad261985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_a5e16af5720ccde4c590b82f8e5c0bfc06cb595b5a70e5cfe8576960be6e50ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e16af5720ccde4c590b82f8e5c0bfc06cb595b5a70e5cfe8576960be6e50ff->enter($__internal_a5e16af5720ccde4c590b82f8e5c0bfc06cb595b5a70e5cfe8576960be6e50ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_40657335988fd3e98a60e3657c0b58f10b137bf1d8aaad005d7400f7ad261985->leave($__internal_40657335988fd3e98a60e3657c0b58f10b137bf1d8aaad005d7400f7ad261985_prof);

        
        $__internal_a5e16af5720ccde4c590b82f8e5c0bfc06cb595b5a70e5cfe8576960be6e50ff->leave($__internal_a5e16af5720ccde4c590b82f8e5c0bfc06cb595b5a70e5cfe8576960be6e50ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
