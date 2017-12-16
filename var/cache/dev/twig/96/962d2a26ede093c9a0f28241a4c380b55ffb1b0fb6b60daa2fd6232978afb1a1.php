<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_3033db677555190eaf4445abc76f168902b560c727a2078c167971a70b629a5c extends Twig_Template
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
        $__internal_1cedde4f651736b41f2e8a8108362366c0eace6419ba5946b2bd84bf43c87923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cedde4f651736b41f2e8a8108362366c0eace6419ba5946b2bd84bf43c87923->enter($__internal_1cedde4f651736b41f2e8a8108362366c0eace6419ba5946b2bd84bf43c87923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_b051d06be845a0cffaa03f44bd8791e2f043121364efef971535dca15d1a9db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b051d06be845a0cffaa03f44bd8791e2f043121364efef971535dca15d1a9db5->enter($__internal_b051d06be845a0cffaa03f44bd8791e2f043121364efef971535dca15d1a9db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_1cedde4f651736b41f2e8a8108362366c0eace6419ba5946b2bd84bf43c87923->leave($__internal_1cedde4f651736b41f2e8a8108362366c0eace6419ba5946b2bd84bf43c87923_prof);

        
        $__internal_b051d06be845a0cffaa03f44bd8791e2f043121364efef971535dca15d1a9db5->leave($__internal_b051d06be845a0cffaa03f44bd8791e2f043121364efef971535dca15d1a9db5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
