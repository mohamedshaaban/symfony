<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_d69a00e64a9e5265d4c25cef77bf075ffc19a08326bde7c19b5d107c1097ffe8 extends Twig_Template
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
        $__internal_01975da16d3785579f5cb7ae098595545b4c657dbc8c70ec5102e7f1ff0e6edb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01975da16d3785579f5cb7ae098595545b4c657dbc8c70ec5102e7f1ff0e6edb->enter($__internal_01975da16d3785579f5cb7ae098595545b4c657dbc8c70ec5102e7f1ff0e6edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_e3f02aad279552a013c01f99399c54c0991ef7b00bb228bff86079f24688b040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f02aad279552a013c01f99399c54c0991ef7b00bb228bff86079f24688b040->enter($__internal_e3f02aad279552a013c01f99399c54c0991ef7b00bb228bff86079f24688b040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_01975da16d3785579f5cb7ae098595545b4c657dbc8c70ec5102e7f1ff0e6edb->leave($__internal_01975da16d3785579f5cb7ae098595545b4c657dbc8c70ec5102e7f1ff0e6edb_prof);

        
        $__internal_e3f02aad279552a013c01f99399c54c0991ef7b00bb228bff86079f24688b040->leave($__internal_e3f02aad279552a013c01f99399c54c0991ef7b00bb228bff86079f24688b040_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
