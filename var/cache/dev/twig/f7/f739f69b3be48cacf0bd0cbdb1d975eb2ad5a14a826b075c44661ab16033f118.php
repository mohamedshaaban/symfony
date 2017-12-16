<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_d208a0c0346916a77cd5f517c8f7d1ba7f3e12bc1ab079f9233c82b6f8b63735 extends Twig_Template
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
        $__internal_dfe19b584ae079d73177588826795e352a032e2babd7cbb24fed7ae8b7b4e424 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfe19b584ae079d73177588826795e352a032e2babd7cbb24fed7ae8b7b4e424->enter($__internal_dfe19b584ae079d73177588826795e352a032e2babd7cbb24fed7ae8b7b4e424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_bb3cb54d7d87a2c16d3bffa5e4e12d77db7b571ad2b730cb987d9591a3c50a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3cb54d7d87a2c16d3bffa5e4e12d77db7b571ad2b730cb987d9591a3c50a48->enter($__internal_bb3cb54d7d87a2c16d3bffa5e4e12d77db7b571ad2b730cb987d9591a3c50a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_dfe19b584ae079d73177588826795e352a032e2babd7cbb24fed7ae8b7b4e424->leave($__internal_dfe19b584ae079d73177588826795e352a032e2babd7cbb24fed7ae8b7b4e424_prof);

        
        $__internal_bb3cb54d7d87a2c16d3bffa5e4e12d77db7b571ad2b730cb987d9591a3c50a48->leave($__internal_bb3cb54d7d87a2c16d3bffa5e4e12d77db7b571ad2b730cb987d9591a3c50a48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
