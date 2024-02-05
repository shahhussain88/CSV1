$clusterName = 'tsudev-aks'
$resourceGroupName = 'tsudev-rg'
$subscriptionId = '7a648a44-eced-4459-8256-09eba55734c5'
# Install kubectl
az aks install-cli --only-show-errors

#get clientID
#clientID = 'a36394c8-dc81-4333-b145-99ab8003203d'

# Get AKS credentials
az aks get-credentials \
  name $clusterName \
  resource-group $resourceGroupName \
  subscription $subscriptionId \
  only-show-errors

applicationGatewayForContainersName='tsudev-agfc-alb'
diagnosticSettingName="DefaultDiagnosticSettings"

# Install the Application Load Balancer Controller
command="helm install alb-controller oci://mcr.microsoft.com/application-lb/charts/alb-controller \
--namespace default \
--version 0.6.3 \
--set albController.namespace='azure-alb-system' \
--set albController.podIdentity.clientID='a36394c8-dc81-4333-b145-99ab8003203d'"

az aks command invoke \
name 'tsudev-aks' \
resource-group 'tsudev-rg' \
subscription '7a648a44-eced-4459-8256-09eba55734c5' \
command "$command"


#helm install alb-controller oci://mcr.microsoft.com/application-lb/charts/alb-controller --namespace default --version 0.6.3 --set albController.namespace=azure-alb-system  --set albController.podIdentity.clientID=$(az identity show -g 'tsudev-rg' -n azure-alb-identity --query clientId -o tsv)

# Add Helm repos
helm repo add prometheus-community https://prometheus-community.github.io/helm-charts
helm repo add jetstack https://charts.jetstack.io

# Update Helm repos
helm repo update
