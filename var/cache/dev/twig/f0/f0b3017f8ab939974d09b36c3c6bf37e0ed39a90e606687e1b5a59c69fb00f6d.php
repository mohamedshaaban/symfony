<?php

/* form_table_layout.html.twig */
class __TwigTemplate_edc51ad21eb13e33fa236cb1f839b5b1021b239e5de459661f1ac4098249fb74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e61e208a9b55268d5a849fe4914676b5babf3d6bf2321bfded497a46605c164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e61e208a9b55268d5a849fe4914676b5babf3d6bf2321bfded497a46605c164->enter($__internal_0e61e208a9b55268d5a849fe4914676b5babf3d6bf2321bfded497a46605c164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_7ae8e57c35a9950446a6f8151b05de0234c6a83f4876af98a44b26137541657f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae8e57c35a9950446a6f8151b05de0234c6a83f4876af98a44b26137541657f->enter($__internal_7ae8e57c35a9950446a6f8151b05de0234c6a83f4876af98a44b26137541657f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_0e61e208a9b55268d5a849fe4914676b5babf3d6bf2321bfded497a46605c164->leave($__internal_0e61e208a9b55268d5a849fe4914676b5babf3d6bf2321bfded497a46605c164_prof);

        
        $__internal_7ae8e57c35a9950446a6f8151b05de0234c6a83f4876af98a44b26137541657f->leave($__internal_7ae8e57c35a9950446a6f8151b05de0234c6a83f4876af98a44b26137541657f_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d2bdbc60dcee3ee16f1b4b868388481a60d7bc88d52c96d88e4af6ab617356b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2bdbc60dcee3ee16f1b4b868388481a60d7bc88d52c96d88e4af6ab617356b1->enter($__internal_d2bdbc60dcee3ee16f1b4b868388481a60d7bc88d52c96d88e4af6ab617356b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9c8f968db47e0879ec05b4fd597f4c77f2cb2528c9b34c2c914f3b3926813b38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8f968db47e0879ec05b4fd597f4c77f2cb2528c9b34c2c914f3b3926813b38->enter($__internal_9c8f968db47e0879ec05b4fd597f4c77f2cb2528c9b34c2c914f3b3926813b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_9c8f968db47e0879ec05b4fd597f4c77f2cb2528c9b34c2c914f3b3926813b38->leave($__internal_9c8f968db47e0879ec05b4fd597f4c77f2cb2528c9b34c2c914f3b3926813b38_prof);

        
        $__internal_d2bdbc60dcee3ee16f1b4b868388481a60d7bc88d52c96d88e4af6ab617356b1->leave($__internal_d2bdbc60dcee3ee16f1b4b868388481a60d7bc88d52c96d88e4af6ab617356b1_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_145a9093f56b6cbd6cec9ed9ffdc20945d0243aba20a942b27b2160d8cafc82f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_145a9093f56b6cbd6cec9ed9ffdc20945d0243aba20a942b27b2160d8cafc82f->enter($__internal_145a9093f56b6cbd6cec9ed9ffdc20945d0243aba20a942b27b2160d8cafc82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_833549a89b0a1926b1b28339d611e767149d2afd2323c558c952a75e1486943a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_833549a89b0a1926b1b28339d611e767149d2afd2323c558c952a75e1486943a->enter($__internal_833549a89b0a1926b1b28339d611e767149d2afd2323c558c952a75e1486943a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_833549a89b0a1926b1b28339d611e767149d2afd2323c558c952a75e1486943a->leave($__internal_833549a89b0a1926b1b28339d611e767149d2afd2323c558c952a75e1486943a_prof);

        
        $__internal_145a9093f56b6cbd6cec9ed9ffdc20945d0243aba20a942b27b2160d8cafc82f->leave($__internal_145a9093f56b6cbd6cec9ed9ffdc20945d0243aba20a942b27b2160d8cafc82f_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_516f5c38d5679345427c0642ce3acdad8e818d943c6dd10d6b9a695b318e7934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_516f5c38d5679345427c0642ce3acdad8e818d943c6dd10d6b9a695b318e7934->enter($__internal_516f5c38d5679345427c0642ce3acdad8e818d943c6dd10d6b9a695b318e7934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_502079d3ce151be06f9759ff87e4a65774efb08fe341044f5eb36e665fde20bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_502079d3ce151be06f9759ff87e4a65774efb08fe341044f5eb36e665fde20bf->enter($__internal_502079d3ce151be06f9759ff87e4a65774efb08fe341044f5eb36e665fde20bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_502079d3ce151be06f9759ff87e4a65774efb08fe341044f5eb36e665fde20bf->leave($__internal_502079d3ce151be06f9759ff87e4a65774efb08fe341044f5eb36e665fde20bf_prof);

        
        $__internal_516f5c38d5679345427c0642ce3acdad8e818d943c6dd10d6b9a695b318e7934->leave($__internal_516f5c38d5679345427c0642ce3acdad8e818d943c6dd10d6b9a695b318e7934_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_d4a379ff1ac6542b117e1709da1c45f5d83bb0b8d00a61f1f0fd9824e7d64757 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a379ff1ac6542b117e1709da1c45f5d83bb0b8d00a61f1f0fd9824e7d64757->enter($__internal_d4a379ff1ac6542b117e1709da1c45f5d83bb0b8d00a61f1f0fd9824e7d64757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_c942aa6940ee754d168f1c14973c60fca3b87d39ee3e8bd08559cc7c19928090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c942aa6940ee754d168f1c14973c60fca3b87d39ee3e8bd08559cc7c19928090->enter($__internal_c942aa6940ee754d168f1c14973c60fca3b87d39ee3e8bd08559cc7c19928090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "parent", array())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_c942aa6940ee754d168f1c14973c60fca3b87d39ee3e8bd08559cc7c19928090->leave($__internal_c942aa6940ee754d168f1c14973c60fca3b87d39ee3e8bd08559cc7c19928090_prof);

        
        $__internal_d4a379ff1ac6542b117e1709da1c45f5d83bb0b8d00a61f1f0fd9824e7d64757->leave($__internal_d4a379ff1ac6542b117e1709da1c45f5d83bb0b8d00a61f1f0fd9824e7d64757_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
