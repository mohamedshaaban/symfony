<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_a38d416299a60ade88e74c5da5400284ba1cfc023ff596a77203f597afdbb348 extends Twig_Template
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
        $__internal_4bc301bf77e32ac21a4ac1a2a1d8b009a04d9a617885e632e3ce7770044540ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bc301bf77e32ac21a4ac1a2a1d8b009a04d9a617885e632e3ce7770044540ea->enter($__internal_4bc301bf77e32ac21a4ac1a2a1d8b009a04d9a617885e632e3ce7770044540ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_845540b48afe56ad14019f67efa24c1ae5d419e54f0b7f31d66f69f4aedd6730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_845540b48afe56ad14019f67efa24c1ae5d419e54f0b7f31d66f69f4aedd6730->enter($__internal_845540b48afe56ad14019f67efa24c1ae5d419e54f0b7f31d66f69f4aedd6730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4bc301bf77e32ac21a4ac1a2a1d8b009a04d9a617885e632e3ce7770044540ea->leave($__internal_4bc301bf77e32ac21a4ac1a2a1d8b009a04d9a617885e632e3ce7770044540ea_prof);

        
        $__internal_845540b48afe56ad14019f67efa24c1ae5d419e54f0b7f31d66f69f4aedd6730->leave($__internal_845540b48afe56ad14019f67efa24c1ae5d419e54f0b7f31d66f69f4aedd6730_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
