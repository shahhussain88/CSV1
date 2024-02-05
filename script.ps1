@allowed([
  'tsudev'
  'tsustage'
  'tsuprod'
])
param environmentType string
param location string = 'eastus2'
param aksvnetName string = '${environmentType}-aks-vnet'
param agfc_vnet string = '${environmentType}-agfc-vnet'
param aksName string = '${environmentType}-aks'
param rgname string = '${environmentType}-rg'
param agfcname string = '${environmentType}-agfc-alb'
param stringuri string = 'https://github.com/shahhussain88/CSV1/blob/master/script.ps1'

resource applicationLoadBalancerManagedIdentity 'Microsoft.ManagedIdentity/userAssignedIdentities@2018-11-30' existing = {
  name: 'azure-alb-identity'
}

resource deploymentScript 'Microsoft.Resources/deploymentScripts@2023-08-01' = {
  name: 'inlineCLI'
  location: location
  kind: 'AzurePowerShell'
  identity: {
    type: 'UserAssigned'
    userAssignedIdentities: {
      '${applicationLoadBalancerManagedIdentity.id}': {}
    }
  }
  properties: {
    azPowerShellVersion: '8.0'
    timeout: 'PT10M'
    environmentVariables: [
      {
        name: 'rgname'
        value: rgname
      }
      {
        name: 'AKS_NAME'
        value: aksName
      }
    ]
    primaryScriptUri: stringuri
    cleanupPreference: 'OnExpiration'
    retentionInterval: 'PT1H'
  }
}

output exists bool = deploymentScript.properties.outputs.Result

