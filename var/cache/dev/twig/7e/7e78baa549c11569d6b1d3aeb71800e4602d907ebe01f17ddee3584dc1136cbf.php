<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_02b538008fdf0896698ca57cd680791892fd88326fa82832987fb5bc7dc9fa3c extends Twig_Template
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
        $__internal_7d1e0f790223107931d8350b8135647a0a04724c304a8ae852d4d4e6b7ba2244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d1e0f790223107931d8350b8135647a0a04724c304a8ae852d4d4e6b7ba2244->enter($__internal_7d1e0f790223107931d8350b8135647a0a04724c304a8ae852d4d4e6b7ba2244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_a8966e4a83aac4e39a3af3aeaa4d742cf71a157022f6a9eb62db9dd00dc95c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8966e4a83aac4e39a3af3aeaa4d742cf71a157022f6a9eb62db9dd00dc95c94->enter($__internal_a8966e4a83aac4e39a3af3aeaa4d742cf71a157022f6a9eb62db9dd00dc95c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_7d1e0f790223107931d8350b8135647a0a04724c304a8ae852d4d4e6b7ba2244->leave($__internal_7d1e0f790223107931d8350b8135647a0a04724c304a8ae852d4d4e6b7ba2244_prof);

        
        $__internal_a8966e4a83aac4e39a3af3aeaa4d742cf71a157022f6a9eb62db9dd00dc95c94->leave($__internal_a8966e4a83aac4e39a3af3aeaa4d742cf71a157022f6a9eb62db9dd00dc95c94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
