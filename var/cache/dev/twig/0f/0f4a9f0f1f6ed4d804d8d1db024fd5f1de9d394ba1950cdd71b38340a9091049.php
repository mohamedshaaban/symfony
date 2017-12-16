<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_4009fcf80af16243a2da129f0ddf64c81627acb07900f41c9de602b317d7dc45 extends Twig_Template
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
        $__internal_88dced0d10c4bdd50dc7d9fca39f51235b8beb1350de232290c432c83fdcd2e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88dced0d10c4bdd50dc7d9fca39f51235b8beb1350de232290c432c83fdcd2e1->enter($__internal_88dced0d10c4bdd50dc7d9fca39f51235b8beb1350de232290c432c83fdcd2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_38a3322213bc552a683415962e662ab6953cfea75dfd918ed0df20a13b03d788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38a3322213bc552a683415962e662ab6953cfea75dfd918ed0df20a13b03d788->enter($__internal_38a3322213bc552a683415962e662ab6953cfea75dfd918ed0df20a13b03d788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_88dced0d10c4bdd50dc7d9fca39f51235b8beb1350de232290c432c83fdcd2e1->leave($__internal_88dced0d10c4bdd50dc7d9fca39f51235b8beb1350de232290c432c83fdcd2e1_prof);

        
        $__internal_38a3322213bc552a683415962e662ab6953cfea75dfd918ed0df20a13b03d788->leave($__internal_38a3322213bc552a683415962e662ab6953cfea75dfd918ed0df20a13b03d788_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
