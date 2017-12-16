<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_095ceb3c077aecc5ccbb7b45a4d83ca8d6b9efb1723d43bc9fe245400b18d23d extends Twig_Template
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
        $__internal_4dc571535ffc9ab40a428ea5e33fc31d66b1f727922bad2a740e47f6c6654004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dc571535ffc9ab40a428ea5e33fc31d66b1f727922bad2a740e47f6c6654004->enter($__internal_4dc571535ffc9ab40a428ea5e33fc31d66b1f727922bad2a740e47f6c6654004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_7cd8785e491edefbae50a71f5706e35e057c180a6a4bfd684f5f0a0ba5eaf378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cd8785e491edefbae50a71f5706e35e057c180a6a4bfd684f5f0a0ba5eaf378->enter($__internal_7cd8785e491edefbae50a71f5706e35e057c180a6a4bfd684f5f0a0ba5eaf378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_4dc571535ffc9ab40a428ea5e33fc31d66b1f727922bad2a740e47f6c6654004->leave($__internal_4dc571535ffc9ab40a428ea5e33fc31d66b1f727922bad2a740e47f6c6654004_prof);

        
        $__internal_7cd8785e491edefbae50a71f5706e35e057c180a6a4bfd684f5f0a0ba5eaf378->leave($__internal_7cd8785e491edefbae50a71f5706e35e057c180a6a4bfd684f5f0a0ba5eaf378_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
