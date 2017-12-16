<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f373a60342238ac32ed091265e6a14eb474bac74647416ede56757171db3464d extends Twig_Template
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
        $__internal_3bc211e8c577319c6a9e5a11b2ecbfcc1114d9819b59ec7404c5aa0894821473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bc211e8c577319c6a9e5a11b2ecbfcc1114d9819b59ec7404c5aa0894821473->enter($__internal_3bc211e8c577319c6a9e5a11b2ecbfcc1114d9819b59ec7404c5aa0894821473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_770c706204ca98719710a7109935a3099ed2721fa95c10cc8a26b9a13d36dfa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_770c706204ca98719710a7109935a3099ed2721fa95c10cc8a26b9a13d36dfa1->enter($__internal_770c706204ca98719710a7109935a3099ed2721fa95c10cc8a26b9a13d36dfa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3bc211e8c577319c6a9e5a11b2ecbfcc1114d9819b59ec7404c5aa0894821473->leave($__internal_3bc211e8c577319c6a9e5a11b2ecbfcc1114d9819b59ec7404c5aa0894821473_prof);

        
        $__internal_770c706204ca98719710a7109935a3099ed2721fa95c10cc8a26b9a13d36dfa1->leave($__internal_770c706204ca98719710a7109935a3099ed2721fa95c10cc8a26b9a13d36dfa1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
